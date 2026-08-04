<?php

/*
    Function to calculate the mobile bill
*/
function calculateBill($plan, $data, $calls, $sms)
{

    /* Tariff plan charges */

    if ($plan == "Basic") {

        $planCharge = 199;

    } elseif ($plan == "Standard") {

        $planCharge = 399;

    } else {

        $planCharge = 599;
    }


    /*
        Additional usage charges
    */

    $dataCharge = 0;

    $callCharge = 0;

    $smsCharge = 0;


    /* Data charges */

    if ($data > 2) {

        $extraData = $data - 2;

        $dataCharge = $extraData * 20;
    }


    /* Call charges */

    if ($calls > 100) {

        $extraCalls = $calls - 100;

        $callCharge = $extraCalls * 0.50;
    }


    /* SMS charges */

    if ($sms > 100) {

        $extraSms = $sms - 100;

        $smsCharge = $extraSms * 0.25;
    }


    /* Total */

    $total = $planCharge
           + $dataCharge
           + $callCharge
           + $smsCharge;


    return array(
        "planCharge" => $planCharge,
        "dataCharge" => $dataCharge,
        "callCharge" => $callCharge,
        "smsCharge" => $smsCharge,
        "total" => $total
    );
}


/* Receive form data */

$customerName = trim($_POST["customer_name"] ?? "");

$mobileNumber = trim($_POST["mobile_number"] ?? "");

$plan = $_POST["plan"] ?? "";

$data = $_POST["data"] ?? "";

$calls = $_POST["calls"] ?? "";

$sms = $_POST["sms"] ?? "";


/* Validation */

$error = "";

if ($customerName == "") {

    $error = "Please enter customer name.";

} elseif (!preg_match("/^[a-zA-Z ]+$/", $customerName)) {

    $error = "Customer name should contain only letters.";

} elseif (!preg_match("/^[0-9]{10}$/", $mobileNumber)) {

    $error = "Please enter a valid 10-digit mobile number.";

} elseif ($plan == "") {

    $error = "Please select a tariff plan.";

} elseif ($data === "" || $data < 0) {

    $error = "Please enter valid data usage.";

} elseif ($calls === "" || $calls < 0) {

    $error = "Please enter valid call usage.";

} elseif ($sms === "" || $sms < 0) {

    $error = "Please enter valid SMS usage.";

}


/* Calculate bill */

if ($error == "") {

    $bill = calculateBill(
        $plan,
        $data,
        $calls,
        $sms
    );

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Mobile Bill Summary</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<?php if ($error != "") { ?>

    <div class="error">

        <?php echo $error; ?>

    </div>


    <a href="index.php" class="back">
        Back to Form
    </a>


<?php } else { ?>


    <div class="success">

        Bill Generated Successfully!

    </div>


    <h1>📱 Mobile Bill Summary</h1>


    <div class="customer-details">

        <p>
            <b>Customer Name:</b>
            <?php echo htmlspecialchars($customerName); ?>
        </p>

        <p>
            <b>Mobile Number:</b>
            <?php echo htmlspecialchars($mobileNumber); ?>
        </p>

        <p>
            <b>Tariff Plan:</b>
            <?php echo htmlspecialchars($plan); ?>
        </p>

    </div>


    <div class="bill-details">

        <div class="bill-row">

            <span>Tariff Plan</span>

            <strong>
                ₹<?php echo number_format($bill["planCharge"], 2); ?>
            </strong>

        </div>


        <div class="bill-row">

            <span>Additional Data Charges</span>

            <strong>
                ₹<?php echo number_format($bill["dataCharge"], 2); ?>
            </strong>

        </div>


        <div class="bill-row">

            <span>Additional Call Charges</span>

            <strong>
                ₹<?php echo number_format($bill["callCharge"], 2); ?>
            </strong>

        </div>


        <div class="bill-row">

            <span>Additional SMS Charges</span>

            <strong>
                ₹<?php echo number_format($bill["smsCharge"], 2); ?>
            </strong>

        </div>


        <div class="total">

            <span>Total Bill</span>

            <strong>
                ₹<?php echo number_format($bill["total"], 2); ?>
            </strong>

        </div>

    </div>


    <div class="usage">

        <p>
            <b>Data Usage:</b>
            <?php echo $data; ?> GB
        </p>

        <p>
            <b>Call Usage:</b>
            <?php echo $calls; ?> minutes
        </p>

        <p>
            <b>SMS Usage:</b>
            <?php echo $sms; ?>
        </p>

    </div>


    <a href="index.php" class="back">
        Generate Another Bill
    </a>


<?php } ?>

</div>

</body>

</html>