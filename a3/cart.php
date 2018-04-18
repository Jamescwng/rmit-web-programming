<!DOCTYPE html>
<?php
session_start();

if (isset($_POST['plm'])) {
    $_SESSION['cart'] = $_POST['plm'];
    $_SESSION['media'] = $_POST['media'];
}
// else {
//     echo 'Nothing added to the cart.';
// }
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Shopping Cart (Shop) - Josh Thomas</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/seemore.js"></script>

        <!-- Font Awesome -->
        <link href="vendor/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css?family=Acme|Alegreya+Sans|Amatica+SC|Hind:700" rel="stylesheet">
    </head>
    <body>
        <?php include_once 'includes/header.php'; ?>

        <main>
            <div class="cart-wrapper">
                <table>
                    <tr>
                        <th class="product-list">Item</th>
                        <th class="format-list">Format</th>
                        <th class="price-list">Price</th>
                        <th class="qty-list">Quantity</th>
                        <th class="total-list">Total</th>
                    </tr>

                    <?php
                    $description = array('s1' => 'Please Like Me - Season 1', 's2' => 'Please Like Me - Season 2', 's3' => 'Please Like Me - Season 3');
                    $prices = array('s1' => 17.00, 's2' => 22.50, 's3' => 26.75);
                    $format = array('s1' => $_SESSION['media']['s1'], 's2' => $_SESSION['media']['s2'], 's3' => $_SESSION['media']['s3']);
                    $subtotal = 0;

                    foreach ($_SESSION['cart'] as $season => $qty) {
                    ?>

                    <tr>
                        <td>
                            <!-- Prints item name -->
                            <?php echo $description[$season]; ?>
                        </td>
                        <td>
                            <?php echo $format[$season]; ?>
                        </td>
                        <td>
                            <!-- Prints individual season prices -->
                            <?php echo '$' . number_format($prices[$season], 2); ?>
                        </td>
                        <td>
                            <!-- Prints item quantity -->
                            <?php echo $qty; ?>
                        </td>
                        <td>
                            <!-- Calculates and displays total price for each season ordered -->
                            <?php
                            $seasontotal = $prices[$season] * $qty;
                            $subtotal += $seasontotal;
                            echo '$' . number_format($seasontotal, 2);
                            ?>
                        </td>
                    </tr>

                    <?php } ?>
                </table>

                <div class="cart-details">
                    <div class="shipping">
                        <h1>SHIPPING METHOD</h1>
                        <div class="shipping-opt">
                            <input id="standard" type="radio" name="shipping" value="0" selected>$0.00 - Standard shipping [21 - 60 business days]<br>
                            <input id="express" type="radio" name="shipping" value="7">$7.00 - Express shipping [7 - 14 business days]<br>
                            <input id="priority" type="radio" name="shipping" value="10.5">$10.50 - Priority shipping [2 - 5 business days]
                        </div>
                    </div>
                    <div class="summary">
                        <h1>SUMMARY</h1>
                        <div class="info">
                            <div class="title">
                                <ul>
                                    <li>Total</li>
                                    <li>Shipping</li>
                                    <li>Grand Total</li>
                                </ul>
                            </div>
                            <div class="price">
                                <span class="output" id="cart-total">
                                    <?php
                                        echo '$' . number_format($subtotal, 2);
                                    ?>
                                </span>
                                <span class="output" id="cart-shipping">

                                </span>
                                <span class="output" id="cart-grandtotal">

                                </span>
                            </div>
                        </div>
                        <a href="checkout.php">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        </main>

        <?php include_once 'includes/footer.php'; ?>
    </body>
</html>
