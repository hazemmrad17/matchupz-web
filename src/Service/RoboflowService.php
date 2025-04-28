<?php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Psr\Log\LoggerInterface;

class RoboflowService
{
    private $httpClient;
    private $apiKey;
    private $inferenceUrl;
    private $logger;

    public function __construct(
        HttpClientInterface $httpClient,
        ParameterBagInterface $params,
        LoggerInterface $logger
    ) {
        $this->httpClient = $httpClient;
        $this->apiKey = $params->get('roboflow_api_key');
        $this->inferenceUrl = $params->get('roboflow_inference_url');
        $this->logger = $logger;
    }

    public function detectObjectsFromBase64(string $base64Image): array
    {
        try {
            $response = $this->httpClient->request('POST', $this->inferenceUrl, [
                'query' => ['api_key' => $this->apiKey],
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'body' => $base64Image,
                'timeout' => 30,
            ]);

            return $response->toArray();
        } catch (\Exception $e) {
            $this->logger->error('Roboflow API error', ['error' => $e->getMessage()]);
            throw new \RuntimeException('Échec de la détection d\'objets: ' . $e->getMessage());
        }
    }

    public function detectObjectsFromUrl(string $imageUrl): array
    {
        try {
            $response = $this->httpClient->request('POST', $this->inferenceUrl, [
                'query' => [
                    'api_key' => $this->apiKey,
                    'image' => $imageUrl,
                ],
                'timeout' => 30,
            ]);

            return $response->toArray();
        } catch (\Exception $e) {
            $this->logger->error('Roboflow API error', ['error' => $e->getMessage()]);
            throw new \RuntimeException('Échec de la détection d\'objets: ' . $e->getMessage());
        }
    }
}