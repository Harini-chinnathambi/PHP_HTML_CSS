<?php

$customerId = $_POST['customer_id'] ?? '';
$password = $_POST['password'] ?? '';

if ($customerId === 'CUST1001' && $password === 'Bank@123') {

    $loginSuccess = true;

} else {

    $loginSuccess = false;

}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Bank Account</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="login-box">

<?php if ($loginSuccess) { ?>

    <h1>Login Successful!</h1>

    <h2>Welcome, Harini C!</h2>

    <div class="account">

        <p>
            <b>Customer Name:</b> Harini C
        </p>

        <p>
            <b>Customer ID:</b> CUST1001
        </p>

        <p>
            <b>Account Number:</b> XXXX XXXX 4582
        </p>

        <p>
            <b>Account Type:</b> Savings Account
        </p>

        <p>
            <b>Available Balance:</b> ₹48,750
        </p>

    </div>

    <a href="index.php" class="logout">
        Logout
    </a>

<?php } else { ?>

    <div class="error">

        Invalid Customer ID or Password.

    </div>

    <a href="index.php" class="back">
        Back to Login
    </a>

<?php } ?>

</div>

</body>

</html>