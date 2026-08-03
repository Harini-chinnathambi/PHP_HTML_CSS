<!DOCTYPE html>
<html>
<head>
    <title>Validation Result</title>
</head>

<body>

<center>

<h2>Applicant Validation Result</h2>

<?php

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$mobile = $_POST["mobile"];

$emailStatus = filter_var($email, FILTER_VALIDATE_EMAIL) ? "Valid Email ID" : "Invalid Email ID";

if(strlen($password) >= 8)
{
    $passwordStatus = "Valid Password";
}
else
{
    $passwordStatus = "Password must contain at least 8 characters";
}

if(preg_match("/^[0-9]{10}$/", $mobile))
{
    $mobileStatus = "Valid Mobile Number";
}
else
{
    $mobileStatus = "Invalid Mobile Number";
}

echo "<table border='1' width='650' cellpadding='10' cellspacing='0'>";

echo "<tr>";
echo "<th colspan='2'>Validation Report</th>";
echo "</tr>";

echo "<tr><td><b>Applicant Name</b></td><td>$name</td></tr>";
echo "<tr><td><b>Email ID</b></td><td>$email</td></tr>";
echo "<tr><td><b>Email Status</b></td><td>$emailStatus</td></tr>";
echo "<tr><td><b>Password Status</b></td><td>$passwordStatus</td></tr>";
echo "<tr><td><b>Mobile Number</b></td><td>$mobile</td></tr>";
echo "<tr><td><b>Mobile Status</b></td><td>$mobileStatus</td></tr>";

echo "<tr>";
echo "<td colspan='2' align='center'>";
echo "<a href='index.php'>Back</a>";
echo "</td>";
echo "</tr>";

echo "</table>";

?>

</center>

</body>
</html>