<!DOCTYPE html>
<html>
<head>
    <title>Employee Email ID</title>
</head>

<body>

<center>

<h2>Employee Email ID Generator</h2>

<?php

$fname = trim($_POST["fname"]);
$lname = trim($_POST["lname"]);
$department = $_POST["department"];

$firstName = strtolower($fname);
$lastInitial = strtolower(substr($lname,0,1));

$email = $firstName . "." . $lastInitial . "@company.com";

echo "<table border='1' width='600' cellpadding='10' cellspacing='0'>";

echo "<tr>";
echo "<th colspan='2'>Employee Details</th>";
echo "</tr>";

echo "<tr>";
echo "<td><b>First Name</b></td>";
echo "<td>$fname</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Last Name</b></td>";
echo "<td>$lname</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Department</b></td>";
echo "<td>$department</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Generated Email ID</b></td>";
echo "<td>$email</td>";
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