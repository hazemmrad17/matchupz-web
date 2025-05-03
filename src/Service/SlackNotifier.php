<?php
namespace App\Service;

use JoliCode\Slack\ClientFactory;
use Psr\Log\LoggerInterface;
use App\Entity\Materiel;

class SlackNotifier
{
    private $client;
    private $logger;
    private $defaultChannel;

    public function __construct(string $botToken, LoggerInterface $logger, string $defaultChannel = '#general')
    {
        $this->client = ClientFactory::create($botToken);
        $this->logger = $logger;
        $this->defaultChannel = $defaultChannel;
    }

    public function sendLowStockNotification(Materiel $materiel): void
    {
        $message = sprintf(
            'Stock faible pour %s (ID: %d). Quantité: %d. Action requise.',
            $materiel->getNom(),
            $materiel->getId(),
            $materiel->getQuantite()
        );

        try {
            $this->client->chatPostMessage([
                'channel' => $this->defaultChannel,
                'text' => $message,
            ]);
            $this->logger->info('Slack notification sent successfully', ['material_id' => $materiel->getId()]);
        } catch (\Throwable $e) {
            $this->logger->error('Slack notification failed: ' . $e->getMessage(), [
                'exception' => $e,
                'material_id' => $materiel->getId(),
                'trace' => $e->getTraceAsString()
            ]);
            throw $e;
        }
    }
}