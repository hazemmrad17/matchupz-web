<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Stripe;

class StripeController extends AbstractController
{
    #[Route('/stripe', name: 'app_stripe')]
    public function index(): Response
    {
        return $this->render('stripe/stripe.html.twig', [
            'stripe_key' => $_ENV["STRIPE_KEY"],
        ]);
    }

    #[Route('/stripe/create-charge', name: 'app_stripe_charge', methods: ['POST'])]
    public function createCharge(Request $request)
    {
        Stripe\Stripe::setApiKey($_ENV["STRIPE_SECRET"]);

        $customerName = $request->request->get('customerName');
        $token = $request->request->get('stripeToken');

        if (!$token) {
            $this->addFlash('error', 'Payment failed: missing token.');
            return $this->redirectToRoute('app_stripe');
        }

        try {
            Stripe\Charge::create([
                "amount" => 5 * 100, // $5 in cents
                "currency" => "usd",
                "source" => $token,
                "description" => "Payment from " . ($customerName ?: 'Unknown Customer'),
                "metadata" => [
                    'customer_name' => $customerName,
                ],
            ]);

            $this->addFlash('success', 'Payment Successful!');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Payment failed: ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_stripe', [], Response::HTTP_SEE_OTHER);
    }
}
