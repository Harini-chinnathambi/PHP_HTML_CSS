<!DOCTYPE html>
<html>
<head>
    <title>Appointment Confirmation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Appointment Confirmation</h2>

<?php

$parent = $_POST["parent"];
$student = $_POST["student"];
$class = $_POST["class"];
$teacher = $_POST["teacher"];
$date = $_POST["date"];
$slot = $_POST["slot"];
$purpose = $_POST["purpose"];

echo "<table>";

echo "<tr>";
echo "<th colspan='2'>Meeting Details</th>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Parent Name</b></td>";
echo "<td>$parent</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Student Name</b></td>";
echo "<td>$student</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Class</b></td>";
echo "<td>$class</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Teacher Name</b></td>";
echo "<td>$teacher</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Meeting Date</b></td>";
echo "<td>$date</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Meeting Slot</b></td>";
echo "<td>$slot</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Purpose</b></td>";
echo "<td>$purpose</td>";
echo "</tr>";

echo "<tr>";
echo "<td colspan='2' align='center'>";
echo "<b>Appointment Registered Successfully</b>";
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