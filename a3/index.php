<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Josh Thomas</title>

        <!-- Font Awesome -->
        <link href="vendor/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css?family=Acme|Alegreya+Sans|Amatica+SC|Hind:700" rel="stylesheet">
    </head>

    <body>
        <header>
            <div class="logo">
            <a href="index.php"><img src="img/joshtom-logo.PNG" alt="" style="max-height:32px;"></a>
            </div>
            <nav>
                <ul>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="shop.php">STORE</a></li>
                    <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                </ul>
            </nav>
        </header>

        <main>
            <div class="desc">
                <div id="jumbotron-pic">
                </div>
                <div class="jumbotron">
                    <h1><span>Josh Thomas</span> is the lead actor and creator of the comedy series, <span>Please Like Me</span>.</h1>
                    <p>
                        After making his mark as an award-winning and hugely-successful stand-up comedian and television panellist, Josh Thomas turned his hand to writing, acting and co-executive producing his own television show for ABC TV, inspired by his life and his comedy, called Please Like Me. Josh's accolades include awards from the Australian Academy and the Australian Writers Guild for his writing in Please Like Me.
                    </p>
                </div>
            </div>

            <div class="bluray-promo">
                <h1>Seasons 1, 2 and 3 are now available on DVD and BluRay</h1>
                <img src="img/plm_s1.jpg" alt="please like me season 1">
                <img src="img/plm_s2.jpg" alt="please like me season 2">
                <img src="img/plm_s3.jpg" alt="please like me season 3">
                <a href="store.php" id="store">Go to Store Page</a>
            </div>

            <div class="season4-promo">
                <div class="container">
                    <h1>Please Like Me Season 4</h1>
                    <h3>Premiering Wednesday, November 9</h3>
                    <h3>9:30pm on ABC TV</h3>
                    <p>
                        Please Like Me is a comedy series airing in Australia and Canada.
                    </p>
                    <div class="broadcast">
                        <p>AS SEEN ON:</p>
                        <img src="img/abc_au.png" alt="abc television" />
                        <img src="img/cbc_ca.png" alt="cbc television" />
                    </div>
                </div>
            </div>
        </main>

        <?php include 'includes/footer.php';?>

    </body>
</html>
