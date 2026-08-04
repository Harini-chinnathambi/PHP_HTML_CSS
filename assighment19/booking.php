<?php

/*
    Function to return package price
*/
function getPackagePrice($package)
{

    if ($package == "Goa") {

        return 12000;

    } elseif ($package == "Ooty") {

        return 8000;

    } elseif ($package == "Manali") {

        return 18000;

    } elseif ($package == "Kerala") {

        return 15000;

    } else {

        return 0;
    }
}


/*
    Receive form data
*/

$customerName = trim($_POST["customer_name"] ?? "");

$email = trim($_POST["email"] ?? "");

$mobile = trim($_POST["mobile"] ?? "");

$package = $_POST["package"] ?? "";

$travelDate = $_POST["travel_date"] ?? "";

$persons = $_POST["persons"] ?? "";


/*
    Validation
*/

$error = "";


if ($customerName == "") {

    $error = "Please enter your name.";

} elseif (!preg_match("/^[a-zA-Z ]+$/", $customerName)) {

    $error = "Name should contain only letters.";

} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    $error = "Please enter a valid email address.";

} elseif (!preg_match("/^[0-9]{10}$/", $mobile)) {

    $error = "Please enter a valid 10-digit mobile number.";

} elseif ($package == "") {

    $error = "Please select a travel package.";

} elseif ($travelDate == "") {

    $error = "Please select your travel date.";

} elseif ($persons == "" || $persons < 1 || $persons > 10) {

    $error = "Number of travellers must be between 1 and 10.";

}


/*
    Calculate total amount
*/

if ($error == "") {

    $packagePrice = getPackagePrice($package);

    $totalAmount = $packagePrice * $persons;

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Booking Confirmation</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<?php if ($error != "") { ?>

    <div class="error">

        <?php echo htmlspecialchars($error); ?>

    </div>


    <a href="index.php" class="back">
        Back to Booking
    </a>


<?php } else { ?>


    <div class="success">

        Booking Confirmed Successfully!

    </div>


    <div class="icon">
        ✈️
    </div>


    <h1>Booking Confirmation</h1>

    <p class="subtitle">
        Thank you for choosing our travel service
    </p>


    <div class="booking-details">

        <p>
            <span>Customer Name</span>

            <strong>
                <?php echo htmlspecialchars($customerName); ?>
            </strong>
        </p>


        <p>
            <span>Email Address</span>

            <strong>
                <?php echo htmlspecialchars($email); ?>
            </strong>
        </p>


        <p>
            <span>Mobile Number</span>

            <strong>
                <?php echo htmlspecialchars($mobile); ?>
            </strong>
        </p>


        <p>
            <span>Travel Package</span>

            <strong>
                <?php echo htmlspecialchars($package); ?>
            </strong>
        </p>


        <p>
            <span>Travel Date</span>

            <strong>
                <?php echo htmlspecialchars($travelDate); ?>
            </strong>
        </p>


        <p>
            <span>Number of Travellers</span>

            <strong>
                <?php echo htmlspecialchars($persons); ?>
            </strong>
        </p>


        <p class="total">

            <span>Total Package Amount</span>

            <strong>
                ₹<?php echo number_format($totalAmount, 2); ?>
            </strong>

        </p>

    </div>


    <div class="message">

        Your travel package has been successfully reserved.
        Please keep your booking details for future reference.

    </div>


    <a href="index.php" class="back">
        Make Another Booking
    </a>


<?php } ?>

</div>

</body>

</html>