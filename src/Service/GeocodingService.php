<?php

namespace App\Service;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

class GeocodingService
{
    private string $apiKey;
    private string $geocodingApiUrl;
    private string $weatherApiUrl;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->geocodingApiUrl = 'https://api.api-ninjas.com/v1/geocoding?city=';
        $this->weatherApiUrl = 'https://api.api-ninjas.com/v1/weather?lat={lat}&lon={lon}';
    }

    /**
     * Fetches coordinates for a given address.
     *
     * @param string $address The address to geocode (e.g., "Tunis, Tunisie")
     * @return array|null [latitude, longitude] or null if failed
     */
    public function getCoordinates(string $address): ?array
    {
        if (empty($address)) {
            return null;
        }

        // Default to Tunisia if no country is specified
        if (!str_contains($address, ',')) {
            $address .= ', Tunisie';
        }

        $encodedAddress = urlencode($address);
        $url = $this->geocodingApiUrl . $encodedAddress;

        $client = HttpClient::create();
        try {
            $response = $client->request('GET', $url, [
                'headers' => [
                    'X-Api-Key' => $this->apiKey,
                ],
            ]);

            if ($response->getStatusCode() !== 200) {
                return null;
            }

            $data = $response->toArray();
            if (empty($data) || !isset($data[0]['latitude'], $data[0]['longitude'])) {
                return null;
            }

            return [
                'latitude' => $data[0]['latitude'],
                'longitude' => $data[0]['longitude'],
            ];
        } catch (TransportExceptionInterface $e) {
            return null;
        }
    }

    /**
     * Fetches weather data for the given coordinates.
     *
     * @param float $latitude The latitude of the location
     * @param float $longitude The longitude of the location
     * @return array|null Weather data or null if failed
     */
    public function getWeather(float $latitude, float $longitude): ?array
    {
        $url = str_replace(
            ['{lat}', '{lon}'],
            [$latitude, $longitude],
            $this->weatherApiUrl
        );

        $client = HttpClient::create();
        try {
            $response = $client->request('GET', $url, [
                'headers' => [
                    'X-Api-Key' => $this->apiKey,
                ],
            ]);

            if ($response->getStatusCode() !== 200) {
                return null;
            }

            $data = $response->toArray();
            if (empty($data)) {
                return null;
            }

            $temp = $data['temp'] ?? 'N/A';
            $cloudPct = $data['cloud_pct'] ?? 'N/A';

            // Determine weather condition based on cloud percentage and temperature
            $condition = 'cloudy'; // Default to cloudy
            if ($cloudPct !== 'N/A' && $temp !== 'N/A') {
                if ($cloudPct < 30 && $temp > 20) {
                    $condition = 'sunny';
                } elseif ($cloudPct >= 70) {
                    $condition = 'rainy';
                }
            }

            return [
                'temp' => $temp,
                'humidity' => $data['humidity'] ?? 'N/A',
                'cloud_pct' => $cloudPct,
                'condition' => $condition, // Add condition field
            ];
        } catch (TransportExceptionInterface $e) {
            return null;
        }
    }
}