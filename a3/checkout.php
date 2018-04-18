<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Checkout (Shop) - Josh Thomas</title>

        <!-- Font Awesome -->
        <link href="vendor/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css?family=Acme|Alegreya+Sans|Amatica+SC|Hind:700" rel="stylesheet">
    </head>
    <body>
        <?php include 'includes/header.php'; ?>

        <main>
            <h3 class="contact-page-title">CHECKOUT</h3>
            <div class="form-wrapper">
                <form id="checkout" action="confirmation.php" method="post">
                    <h3>Contact Info</h3>
                    <div class="left">
                        <label for="firstName">First Name</label>
                        <input id="firstName" type="text" name="firstName" placeholder="First Name" pattern="[A-Za-z]{1,15}" required>
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="right">
                        <label for="lastName">Last Name</label>
                        <input id="lastName" type="text" name="lastName" placeholder="Last Name" pattern="[A-Za-z]{1,15}" required>
                        <label for="contactNumber">Contact No.</label>
                        <input id="contactNumber" type="tel" name="contactNumber" placeholder="Contact No." pattern="[0-9\s/\+-#]{8,16}" title="Please enter numbers and punctuations only." required>
                    </div>

                    <br class="cb">

                    <h3>Billing Info</h3>
                    <label for="billingAddress">Billing Address</label>
                    <textarea id="billingAddress" rows="3" name="Billing Address" placeholder="EXAMPLE: I'd like you to perform a short comedy skit for my web programming tutor's birthday party, woo!" required></textarea>
                    <label for="crecard">Credit Card Number</label>
                    <input id="ccard" type="text" name="ccard" placeholder="&#9679;&#9679;&#9679;&#9679;&nbsp;&nbsp;&nbsp;&#9679;&#9679;&#9679;&#9679;&nbsp;&nbsp;&nbsp;&#9679;&#9679;&#9679;&#9679;&nbsp;&nbsp;&nbsp;&#9679;&#9679;&#9679;&#9679;" pattern="/^(?:4[0-9]{12}(?:[0-9]{3})?)$/" required>
                    <div class="left">
                        <label for="cvv">CVV</label>
                        <input id="cvv" type="text" name="cvv" placeholder="&#9679;&#9679;&#9679;" required>
                    </div>
                    <div class="right">
                        <label for="cardExpiry">Card Expiry</label>
                        <input id="cardExpiry" type="text" name="cardExpiry" placeholder="MM/YY" required>
                    </div>

                    <br class="cb">

                    <button>Submit</button>
                </form>
            </div>
            <div id="liststorage">

            </div>

            <div class="rmb_options">
                <label for="rmb_checkbox">Store my credentials</label>
                <input id="rmb_checkbox" type="checkbox" name="remember">
            </div>
        </main>

        <script src="js/prefill.js"></script>

        <?php include 'includes/footer.php'; ?>
    </body>
</html>
