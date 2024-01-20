# Stripe sample Code

[YouTube](https://www.youtube.com/watch?v=D_XL3P4MFH4)

## Steps for local setup

1. This Repo uses [DDEV](https://ddev.com/) for LAMP Stack.
2. Install DDEV and run `ddev start`
3. Rename `env.example` file to `.env` file and add relevent data.
4. Browse to [https://stripe-php.local](https://stripe-php.local) to access the site.
5. Navigate to the checkout page and test Stripe integration with test card data.

## Error Response

Instead of payment sucess response we get the below error.

> Refused to load the image 'data:image/png;base64,iVBORw0KGgo=' because it violates the following Content > Security Policy directive: "img-src 'self'".
