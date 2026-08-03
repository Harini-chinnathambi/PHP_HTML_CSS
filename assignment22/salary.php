<!DOCTYPE html>
<html>
<head>
    <title>Salary Details</title>
</head>

<body>

<center>

<h2>Employee Salary Details</h2>

<?php

$name = $_POST["name"];
$empid = $_POST["empid"];
$basic = $_POST["basic"];
$hra = $_POST["hra"];
$da = $_POST["da"];
$deduction = $_POST["deduction"];

function calculateGrossSalary($basic, $hra, $da)
{
    return $basic + $hra + $da;
}

function calculateNetSalary($gross, $deduction)
{
    return $gross - $deduction;
}

$grossSalary = calculateGrossSalary($basic, $hra, $da);
$netSalary = calculateNetSalary($grossSalary, $deduction);

echo "<table border='1' cellpadding='10' cellspacing='0' width='600'>";

echo "<tr>";
echo "<th colspan='2'>Salary Information</th>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Employee Name</b></td>";
echo "<td>$name</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Employee ID</b></td>";
echo "<td>$empid</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Basic Salary</b></td>";
echo "<td>₹ $basic</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>HRA</b></td>";
echo "<td>₹ $hra</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>DA</b></td>";
echo "<td>₹ $da</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Gross Salary</b></td>";
echo "<td><b>₹ $grossSalary</b></td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Deductions</b></td>";
echo "<td>₹ $deduction</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Net Salary</b></td>";
echo "<td><b>₹ $netSalary</b></td>";
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