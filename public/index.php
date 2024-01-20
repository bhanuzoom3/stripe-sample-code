<?php

require './shared.php';

$paymentIntent = $stripe->paymentIntents->create([
  'amount' => 1099,
  'currency' => 'inr',
  'automatic_payment_methods' => ['enabled' => TRUE],
]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Stripe Sample </title>

  <link rel="stylesheet" href="/css/global.css" />
  <link rel="stylesheet" href="/css/normalize.css" />
</head>

<body>
  <main>
    <h1> Accept a Stripe Payment 4242 4242 4242 4242</h1>
    <form id="payment-form">
      <div id="payment-element"></div>
      <button>Pay</button>
      <div id="error-messages">
      </div>
    </form>
  </main>
  <script src="https://js.stripe.com/v3/"></script>
  <script>
    const stripe = Stripe('<?= $_ENV["STRIPE_PUBLISHABLE_KEY"] ?>')

    const elements = stripe.elements({
      clientSecret: '<?= $paymentIntent->client_secret ?>'
    })

    const paymentElement = elements.create('payment')
    paymentElement.mount('#payment-element')

    const form = document.getElementById('payment-form')
    form.addEventListener('submit', async (e) => {
      e.preventDefault();

      const error = await stripe.confirmPayment({
        elements,
        confirmParams: {
          return_url: window.location.href.split('?')[0] + 'complete.php'
        }
      })
      if (!error) {
        const messages = document.getElementById('error-messages')
        messages.innerText = error.message;
      }
    })
  </script>

</body>

</html>
