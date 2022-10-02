<?php

namespace App\Http\Controllers\API;

use Stripe\Stripe;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentIntentController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        Stripe::setApiKey(config('stripe.secret_key'));

        try {
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => 359,
                'currency' => 'eur',
            ]);

            return response()->json([
                'clientSecret' => $paymentIntent->client_secret,
            ]);
        } catch (Error $e) {
            return response()->json([
                'error' => $e->getMessage(),
                500
            ]);
        }
    }
}
