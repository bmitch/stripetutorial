<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>

    <h1>Buy my book for $25.00</h1>

    <form action="/purchases" method="POST">
      {{ csrf_field() }}
      <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="{{ config('services.stripe.key') }}"
        data-amount="2500"
        data-name="Some book"
        data-description="Everything you need to get started."
        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
        data-locale="auto"
        data-zip-code="true"
        data-currency="cad">
      </script>
    </form>

    </body>
</html>
