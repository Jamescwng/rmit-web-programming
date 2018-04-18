<!DOCTYPE html>
<?php 
session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Need a Comedian? - Josh Thomas</title>

        <!-- Font Awesome -->
        <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom fonts -->

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,400,600,700,800' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css?family=Acme|Alegreya+Sans|Amatica+SC|Hind:700" rel="stylesheet">
    </head>

    <body>
        <?php include_once 'includes/header.php'; ?>

        <main>
            <h3 class="contact-page-title">
                Need a Comedian?
                <br>
                Fill up this form to make a booking enquiry
            </h3>
            <div class="form-wrapper">
                <form action="https://jupiter.csit.rmit.edu.au/~e54061/wp/processing.php" method="post">
                    <h3>Contact Details</h3>
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
                        <input id="contactNumber" type="tel" name="contactNumber" placeholder="Contact No." pattern="[\+?0-9\s/\\-#]{8,16}" title="Please enter numbers and punctuations only." required>
                    </div>

                    <br class="cb">

                    <h3>Event Details</h3>
                    <div class="left">
                        <label for="eventDate">Date</label>
                        <input id="eventDate" type="date" name="eventDate" placeholder="DD/MM/YY" required>
                    </div>
                    <div class="right">
                        <label for="eventTime">Time</label>
                        <input id="eventTime" type="time" name="eventTime" placeholder="HH:MM" required>
                    </div>

                    <br class="cb">
                    <label for="dateFlex">Date Flexibility</label>
                    <input id="dateFlex" type="range" name="eventFlexibility" min="1", max="3">
                    <br>
                    <span id="not-flex">Not Flexible</span>
                    <span id="flex">Flexible</span>
                    <span id="super-flex">Super Flexible</span>
                    <label for="eventLocation">Location</label>
                    <input id="eventLocation" type="text" name="eventLocation" placeholder="Event Location" required>
                    <label for="performance">Performance Required</label>
                    <select id="performance" name="performance">
                        <option value="Emcee">Emcee</option>
                        <option value="ComedySpot">Comedy Spot</option>
                        <option value="FullShow">Full Show</option>
                        <option value="Other">Other</option>
                    </select>
                    <label for="eventDescription">Description</label>
                    <textarea id="eventDescription" rows="10" name="eventDescription" placeholder="EXAMPLE: I'd like you to perform a short comedy skit for my web programming tutor's birthday party, woo!" required></textarea>
                    <button>Submit</button>
                </form>
            </div>

        </main>

        <?php include_once 'includes/footer.php'; ?>
    </body>
</html>
