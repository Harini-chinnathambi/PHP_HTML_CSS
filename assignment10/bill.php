<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill</title>
</head>

<body>

<center>

<h2>Electricity Bill Details</h2>

<?php

$name = $_POST["name"];
$number = $_POST["number"];
$units = $_POST["units"];

if($units <= 100)
{
    $amount = $units * 1.50;
}
elseif($units <= 200)
{
    $amount = (100 * 1.50) + (($units - 100) * 2.50);
}
elseif($units <= 300)
{
    $amount = (100 * 1.50) + (100 * 2.50) + (($units - 200) * 4.00);
}
else
{
    $amount = (100 * 1.50) + (100 * 2.50) + (100 * 4.00) + (($units - 300) * 6.00);
}

echo "<table border='1' width='600' cellpadding='10' cellspacing='0'>";

echo "<tr>";
echo "<th colspan='2'>Electricity Bill</th>";
echo "</tr>";

echo "<tr><td><b>Consumer Name</b></td><td>$name</td></tr>";
echo "<tr><td><b>Consumer Number</b></td><td>$number</td></tr>";
echo "<tr><td><b>Units Consumed</b></td><td>$units</td></tr>";
echo "<tr><td><b>Total Bill Amount</b></td><td>₹ " . number_format($amount,2) . "</td></tr>";

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