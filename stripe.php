<?php
require_once 'vendor/stripe/stripe-php/init.php';
include 'config_payment.php'; 
// Set your secret key. Remember to switch to your live secret key in production.
// See your keys here: https://dashboard.stripe.com/apikeys
$stripe = new \Stripe\StripeClient($STRIPE_PRIVATE_KEY);
header('Content-Type: application/json');

try {
    // retrieve JSON from POST body
    $jsonStr = file_get_contents('php://input');
    $jsonObj = json_decode($jsonStr);

    $customer=$stripe->customers->create([
        'name' => $jsonObj->name,
        'email'=>$jsonObj->email,
        
      ]);
$paymentIntent=$stripe->paymentIntents->create(
  [
    'amount' => $jsonObj->amount *100,
    'currency' => 'usd',
    'automatic_payment_methods' => ['enabled' => true],
    'customer' => $customer->id,
  ]
);

$output = [
    'clientSecret' => $paymentIntent->client_secret,
];

echo json_encode($output);
}catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}

?>