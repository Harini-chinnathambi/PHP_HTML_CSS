<!DOCTYPE html>
<html>
<head>
    <title>Employee Profile</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Employee Profile</h2>

<?php

$name = $_POST["name"];
$empid = $_POST["empid"];
$department = $_POST["department"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$address = $_POST["address"];

echo "<table>";

echo "<tr><th colspan='2'>Employee Details</th></tr>";

echo "<tr><td><b>Name</b></td><td>$name</td></tr>";

echo "<tr><td><b>Employee ID</b></td><td>$empid</td></tr>";

echo "<tr><td><b>Department</b></td><td>$department</td></tr>";

echo "<tr><td><b>Email</b></td><td>$email</td></tr>";

echo "<tr><td><b>Mobile Number</b></td><td>$mobile</td></tr>";

echo "<tr><td><b>Address</b></td><td>$address</td></tr>";

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