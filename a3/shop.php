<!DOCTYPE html>
<?php
session_start();

?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Store (Please Like Me) - Josh Thomas</title>

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
            <div class="ordersection">
                <form class="order-form" action="cart.php" method="post">
                    <div class="item-season">
                        <div class="season-image">
                            <img src="img/plm_s1.jpg" alt="season 1 box art" />
                        </div>

                        <div class="season-details">
                            <h1>Season 1 - <span id="price">$17.00</span></h1>
                            <div class="description">
                                Josh is going through a number of big changes as he navigates his first decade of adulthood. After being dumped by his girlfriend, he comes to the realization that he is  gay. After that shocker, he moves back into the family home to help care for his mother, who has previously attempted suicide. He later moves out and into a house with best friend Tom. With his life in disarray, big challenges await Josh in his immediate future, which are especially hard for someone like him, who with a natural aversion to drama and emotion. So he deals with it all -- only in his own awkward, self-centered way.
                            </div>
                        </div>
                        <div class="season-purchase">
                            <section>
                                <label class="item-selection">Media Format</label>
                                <input id="dvd" type="radio" name="media[s1]" value="DVD">DVD
                                <input type="radio" name="media[s1]" value="BluRay">BluRay
                            </section>
                            <section>
                                <label class="item-selection">Quantity</label>
                                <select id="quantity-s1" name="plm[s1]" onchange="getTotal();">
                                    <option value="0" selected>Select quantity</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </section>
                            <div class="price-display">Price: <span id="price-s1" name="price-s1">$0.00</span></div>
                            <button>Add to Cart</button>
                        </div>
                    </div>
                    <div class="item-season">
                        <div class="season-image">
                            <img src="img/plm_s2.jpg" alt="season 2 box art" />
                        </div>

                        <div class="season-details">
                            <h1>Season 2 - <span id="price">$22.50</span></h1>
                            <div class="description">
                                Josh and Tom go on a night out with new roommate Patrick (Charles Cottier), where Tom taunts Josh about his attraction to Patrick. The next morning, he is visibly annoyed when Tom and Patrick’s one night stands leave. Later he meets up with his dad, Mae, and his new little sister Grace for lunch, where Alan insists Josh babysit to bond with Grace. That evening, Josh looks after Grace while Alan and Mae go out to dinner. At the house, Naimh, whom Tom has been enjoying a friends-with-benefits situation after Claire leaves to go to Germany, shows up. Patrick also has a Grindr hookup, annoying Josh. When Grace needs a diaper change, an inept Josh takes her into the shower. Alan and Mae arrive to pick up Grace, finding the house full of people. Soon after, a manic Rose arrives with a new hairdo, dress, and puppy, announcing she has quit her medication.
                            </div>
                        </div>
                        <div class="season-purchase">
                            <section>
                                <label class="item-selection">Media Format</label>
                                <input id="dvd" type="radio" name="media[s2]" value="DVD">DVD
                                <input type="radio" name="media[s2]" value="BluRay">BluRay
                            </section>
                            <section>
                                <label class="item-selection">Quantity</label>
                                <select id="quantity-s2" name="plm[s2]" onchange="getTotal();">
                                    <option value="0" selected>Select quantity</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </section>
                            <div class="price-display">Price: <span id="price-s2">$0.00</span></div>
                            <button>Add to Cart</button>
                        </div>
                    </div>
                    <div class="item-season">
                        <div class="season-image">
                            <img src="img/plm_s3.jpg" alt="season 3 box art" />
                        </div>
                        <div class="season-details">
                            <h1>Season 3 - <span id="price">$26.75</span></h1>
                            <div class="description">
                                Josh unexpectedly receives a call from Arnold who hasn’t talked to him for a while, which Arnold blames on exams, and agrees to come for dinner to celebrate their new baby chickens. After dinner, Tom questions why Josh agreed to be just friends with Arnold when he clearly still likes him so much. Later when he has nightmares, Josh asks to sleep in Tom’s room which Josh describes as the loneliest thing they’ve ever done. Rose visits and complains about how Arnold is treating Josh, telling him to find someone else. As the boys recover from their big night, Claire arrives home from Berlin. Josh finally admits that his pet chicken, Adele, is a rooster - but will this mean she ends up becoming the welcome home dinner?
                            </div>
                        </div>
                        <div class="season-purchase">
                            <section>
                                <label class="item-selection">Media Format</label>
                                <input id="dvd" type="radio" name="media[s3]" value="DVD">DVD
                                <input type="radio" name="media[s3]" value="BluRay">BluRay
                            </section>
                            <section>
                                <label class="item-selection">Quantity</label>
                                <select id="quantity-s3" name="plm[s3]" onchange="getTotal();">
                                    <option value="0" selected>Select quantity</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </section>
                            <div class="price-display">Price: <span id="price-s3">$0.00</span></div>
                            <button>Add to Cart</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="total-display">
                <h1>Grand Total: </h1>
                <span id="total-price">$0.00</span>
            </div>

            <div class="plm-digital">
                <h1>Digital downloads of Please Like Me are also available</h1>
                <a href="https://itunes.apple.com/us/tv-season/please-like-me-season-1/id671267950" target="_blank"><img id="purchase-appstore" src="img/appstore.png" alt="download on the app store" /></a>
                <a href="https://play.google.com/store/tv/show/Please_Like_Me?id=RtnabrwLBEs&hl=en" target="_blank"><img id="purchase-playstore" src="img/en-play-badge.png" alt="get it on google play" /></a>
            </div>
        </main>

        <script src="js/shop.js"></script>

        <?php include_once 'includes/footer.php'; ?>

    </body>
</html>
