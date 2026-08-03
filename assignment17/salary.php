<!DOCTYPE html>
<html>
<head>
    <title>Salary Result</title>
</head>

<body>

<center>

<h2>Employee Salary Details</h2>

<?php

$name = $_POST["name"];
$basic = $_POST["basic"];
$hra = $_POST["hra"];
$da = $_POST["da"];


function calculateSalary($basic, $hra, $da)
{
    $hraAmount = ($basic * $hra) / 100;
    $daAmount = ($basic * $da) / 100;

    return $basic + $hraAmount + $daAmount;
}


$grossSalary = calculateSalary($basic, $hra, $da);


echo "<table border='1' cellpadding='10' cellspacing='0' width='600'>";


echo "<tr>";
echo "<th colspan='2'>Salary Details</th>";
echo "</tr>";


echo "<tr>";
echo "<td><b>Employee Name</b></td>";
echo "<td>$name</td>";
echo "</tr>";


echo "<tr>";
echo "<td><b>Basic Salary</b></td>";
echo "<td>₹ $basic</td>";
echo "</tr>";


echo "<tr>";
echo "<td><b>HRA</b></td>";
echo "<td>$hra%</td>";
echo "</tr>";


echo "<tr>";
echo "<td><b>DA</b></td>";
echo "<td>$da%</td>";
echo "</tr>";


echo "<tr>";
echo "<td><b>Gross Salary</b></td>";
echo "<td><b>₹ $grossSalary</b></td>";
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