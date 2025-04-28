<?php

namespace App\Service;

use Google_Client;
use Google_Service_Calendar;
use Google_Service_Calendar_Event;
use Google_Service_Calendar_EventDateTime;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class GoogleCalendarService
{
    private Google_Client $client;
    private Google_Service_Calendar $service;
    private ParameterBagInterface $params;
    private LoggerInterface $logger;
    private ?SessionInterface $session = null;

    public function __construct(ParameterBagInterface $params, LoggerInterface $logger)
    {
        $this->params = $params;
        $this->logger = $logger;
        $this->initializeClient();
    }

    public function setSession(SessionInterface $session): void
    {
        $this->session = $session;
    }

    public function isInitialized(): bool
    {
        try {
            $this->client->getAccessToken();
            return true;
        } catch (\Exception $e) {
            $this->logger->error('Google Calendar client initialization failed', [
                'error' => $e->getMessage(),
            ]);
            return false;
        }
    }

    public function getClient(): Google_Client
    {
        return $this->client;
    }

    public function setAccessToken(array $accessToken): void
    {
        if (!$this->session) {
            throw new \LogicException('Session must be set before setting access token.');
        }

        $this->session->set('google_access_token', $accessToken);
        $this->client->setAccessToken($accessToken);

        // Save the token to a file for persistence
        $tokenPath = $this->params->get('google_token_path');
        if (file_put_contents($tokenPath, json_encode($accessToken, JSON_PRETTY_PRINT)) === false) {
            $this->logger->error('Failed to save Google access token to file', [
                'path' => $tokenPath,
            ]);
        }
    }

    public function refreshAccessToken(): void
    {
        if (!$this->session) {
            throw new \LogicException('Session must be set before refreshing access token.');
        }

        $accessToken = $this->session->get('google_access_token');
        if (!$accessToken) {
            throw new \Exception('No access token available to refresh.');
        }

        $this->client->setAccessToken($accessToken);
        if ($this->client->isAccessTokenExpired()) {
            $this->logger->info('Access token expired, refreshing token.');
            $newAccessToken = $this->client->fetchAccessTokenWithRefreshToken($this->client->getRefreshToken());
            if (isset($newAccessToken['error'])) {
                throw new \Exception('Failed to refresh access token: ' . $newAccessToken['error_description']);
            }
            $this->setAccessToken($newAccessToken);
        }
    }

    public function createEvent($reservation): string
    {
        $event = new Google_Service_Calendar_Event([
            'summary' => $reservation->getMotif(),
            'location' => $reservation->getEspacesportif()->getNomEspace(),
            'description' => 'Réservation #' . $reservation->getIdReservation(),
            'start' => [
                'dateTime' => $reservation->getDateReservee()->format(\DateTime::RFC3339),
                'timeZone' => 'UTC',
            ],
            'end' => [
                'dateTime' => $reservation->getDateReservee()->modify('+1 hour')->format(\DateTime::RFC3339),
                'timeZone' => 'UTC',
            ],
        ]);

        $calendarId = $this->params->get('google_calendar_id');
        $event = $this->service->events->insert($calendarId, $event);
        return $event->getId();
    }

    public function createReservationEvent($reservation): string
    {
        $event = new Google_Service_Calendar_Event([
            'summary' => $reservation->getMotif(),
            'location' => $reservation->getEspacesportif()->getNomEspace(),
            'description' => 'Réservation #' . $reservation->getIdReservation(),
            'start' => [
                'dateTime' => $reservation->getDateReservee()->format(\DateTime::RFC3339),
                'timeZone' => 'UTC',
            ],
            'end' => [
                'dateTime' => $reservation->getDateReservee()->modify('+1 hour')->format(\DateTime::RFC3339),
                'timeZone' => 'UTC',
            ],
        ]);

        $calendarId = $this->params->get('google_calendar_id');
        $event = $this->service->events->insert($calendarId, $event);
        return $event->getId();
    }

    public function updateEvent(string $eventId, $reservation): void
    {
        $event = $this->service->events->get($this->params->get('google_calendar_id'), $eventId);
        $event->setSummary($reservation->getMotif());
        $event->setLocation($reservation->getEspacesportif()->getNomEspace());
        $event->setDescription('Réservation #' . $reservation->getIdReservation());

        $start = new Google_Service_Calendar_EventDateTime();
        $start->setDateTime($reservation->getDateReservee()->format(\DateTime::RFC3339));
        $start->setTimeZone('UTC');
        $event->setStart($start);

        $end = new Google_Service_Calendar_EventDateTime();
        $end->setDateTime($reservation->getDateReservee()->modify('+1 hour')->format(\DateTime::RFC3339));
        $end->setTimeZone('UTC');
        $event->setEnd($end);

        $this->service->events->update($this->params->get('google_calendar_id'), $eventId, $event);
    }

    public function deleteEvent(string $eventId): void
    {
        $this->service->events->delete($this->params->get('google_calendar_id'), $eventId);
    }

    private function initializeClient(): void
    {
        $this->client = new Google_Client();
        $this->client->setApplicationName('Reservation App');
        $this->client->setScopes(Google_Service_Calendar::CALENDAR);
        
        // Load credentials
        $credentialsPath = $this->params->get('google_credentials_path');
        if (!file_exists($credentialsPath)) {
            $this->logger->error('Google credentials file does not exist', [
                'path' => $credentialsPath,
            ]);
            return;
        }
        $this->client->setAuthConfig($credentialsPath);
        $this->client->setAccessType('offline');
        $this->client->setPrompt('select_account consent');

        // Load previously authorized token from file, if it exists
        $tokenPath = $this->params->get('google_token_path');
        if (!file_exists($tokenPath)) {
            // Initialize with an empty JSON object
            file_put_contents($tokenPath, json_encode([]));
        }

        $content = file_get_contents($tokenPath);
        if ($content === false) {
            $this->logger->error('Failed to read Google token file', [
                'path' => $tokenPath,
            ]);
            return;
        }

        $accessToken = json_decode($content, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->logger->error('Invalid JSON in Google token file', [
                'path' => $tokenPath,
                'error' => json_last_error_msg(),
            ]);
            // Reset the file to an empty JSON object
            file_put_contents($tokenPath, json_encode([]));
            $accessToken = [];
        }

        if (!empty($accessToken)) {
            $this->client->setAccessToken($accessToken);
        }

        $this->service = new Google_Service_Calendar($this->client);
    }
}