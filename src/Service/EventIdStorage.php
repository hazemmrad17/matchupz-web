<?php

namespace App\Service;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Psr\Log\LoggerInterface;

class EventIdStorage
{
    private string $storagePath;
    private LoggerInterface $logger;

    public function __construct(ParameterBagInterface $params, LoggerInterface $logger)
    {
        $this->storagePath = $params->get('event_id_storage_path');
        $this->logger = $logger;

        // Initialize the storage file if it doesn't exist
        if (!file_exists($this->storagePath)) {
            $this->saveData([]);
        }
    }

    public function saveEventId(int $reservationId, string $eventId): void
    {
        $data = $this->loadData();
        $data[$reservationId] = $eventId;
        $this->saveData($data);
    }

    public function getEventId(int $reservationId): ?string
    {
        $data = $this->loadData();
        return $data[$reservationId] ?? null;
    }

    public function removeEventId(int $reservationId): void
    {
        $data = $this->loadData();
        if (isset($data[$reservationId])) {
            unset($data[$reservationId]);
            $this->saveData($data);
        }
    }

    private function loadData(): array
    {
        if (!file_exists($this->storagePath)) {
            return [];
        }

        $content = file_get_contents($this->storagePath);
        if ($content === false) {
            $this->logger->error('Failed to read event IDs from storage file', [
                'path' => $this->storagePath,
            ]);
            return [];
        }

        $data = json_decode($content, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->logger->error('Invalid JSON in event IDs file', [
                'path' => $this->storagePath,
                'error' => json_last_error_msg(),
            ]);
            // Reset the file to an empty JSON object
            $this->saveData([]);
            return [];
        }

        return $data;
    }

    private function saveData(array $data): void
    {
        $result = file_put_contents($this->storagePath, json_encode($data, JSON_PRETTY_PRINT));
        if ($result === false) {
            $this->logger->error('Failed to save event IDs to storage file', [
                'path' => $this->storagePath,
            ]);
        }
    }
}