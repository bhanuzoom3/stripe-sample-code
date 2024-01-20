# Accept a Payment

Build a simple checkout form to collect payment details. Included are some basic
build and run scripts you can use to start up the application.

Code Source [https://stripe.com/docs/payments/quickstart?lang=php&platform=web&client=html](https://stripe.com/docs/payments/quickstart?lang=php&platform=web&client=html)

## Running the sample

1. Build the server

~~~
composer install
~~~

2. Run the server

~~~
php -S 127.0.0.1:4242 --docroot=public
~~~

3. Go to [http://localhost:4242/checkout.html](http://localhost:4242/checkout.html)


Repo Source [https://github.com/bhanuzoom3/stripe-sample-code.git](https://github.com/bhanuzoom3/stripe-sample-code.git)

## Steps for local setup

1. This Repo uses [DDEV](https://ddev.com/) for LAMP Stack.
2. Install DDEV and run `ddev start`
3. Add `stripeSecretKey` in secrets.php file.
4. Browse to [https://stripe-sample-code.local](https://stripe-sample-code.local) to access the site.
5. Navigate to the checkout page and test Stripe integration with test card data.

## Error Response

Instead of payment sucess response we get the below error.

> Refused to load the image 'data:image/png;base64,iVBORw0KGgo=' because it violates the following Content > Security Policy directive: "img-src 'self'".

Tried to add the below metag in the header but still the error persists.

`<meta http-equiv="Content-Security-Policy" content="img-src 'self' data:">`
