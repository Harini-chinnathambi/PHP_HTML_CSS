<!DOCTYPE html>
<html>
<head>
    <title>Registration Details</title>
</head>

<body>

<center>

<h2>Registration Successful</h2>

<?php

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$course = $_POST["course"];
$address = $_POST["address"];


echo "<table border='1' cellpadding='10' cellspacing='0' width='600'>";


echo "<tr>";
echo "<th colspan='2'>User Details</th>";
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
echo "<td><b>Gender</b></td>";
echo "<td>$gender</td>";
echo "</tr>";


echo "<tr>";
echo "<td><b>Course</b></td>";
echo "<td>$course</td>";
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

</center>

</body>
</html>