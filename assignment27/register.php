<!DOCTYPE html>
<html>
<head>
    <title>Registration Success</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Customer Registration Successful</h2>

<?php

$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$gender = $_POST["gender"];
$city = $_POST["city"];
$address = $_POST["address"];

echo "<table>";

echo "<tr>";
echo "<th colspan='2'>Customer Details</th>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Name</b></td>";
echo "<td>$name</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Email</b></td>";
echo "<td>$email</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Mobile Number</b></td>";
echo "<td>$mobile</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Gender</b></td>";
echo "<td>$gender</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>City</b></td>";
echo "<td>$city</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Address</b></td>";
echo "<td>$address</td>";
echo "</tr>";

echo "<tr>";
echo "<td colspan='2' align='center'>";
echo "<b>Registration Completed Successfully</b>";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td colspan='2' align='center'>";
echo "<a href='index.php'>Back</a>";
echo "</td>";
echo "</tr>";

echo "</table>";

?>

</div>

</body>
</html>