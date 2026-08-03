

<!DOCTYPE html>
<html>
<head>
    <title>Sales Result</title>
</head>

<body>

<center>

<h2>Sales Calculation Result</h2>

<?php

$product = $_POST["product"];
$quantity = $_POST["quantity"];
$price = $_POST["price"];

function calculateSales($quantity, $price)
{
    return $quantity * $price;
}

$totalSales = calculateSales($quantity, $price);

echo "<table border='1' width='600' cellpadding='10' cellspacing='0'>";

echo "<tr>";
echo "<th colspan='2'>Sales Details</th>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Product Name</b></td>";
echo "<td>$product</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Quantity</b></td>";
echo "<td>$quantity</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Price per Unit</b></td>";
echo "<td>₹ $price</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Total Sales Value</b></td>";
echo "<td><b>₹ $totalSales</b></td>";
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