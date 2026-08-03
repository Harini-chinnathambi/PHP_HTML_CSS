<!DOCTYPE html>
<html>
<head>
    <title>Customer Invoice</title>
</head>

<body>

<center>

<h2>Customer Invoice</h2>

<?php

$customer = $_POST["customer"];
$product = $_POST["product"];
$quantity = $_POST["quantity"];
$price = $_POST["price"];

$total = $quantity * $price;

if($total >= 1000)
{
    $discount = $total * 0.10;
}
else
{
    $discount = 0;
}

$amount = $total - $discount;

$gst = $amount * 0.05;

$netAmount = $amount + $gst;

echo "<table border='1' width='650' cellpadding='10' cellspacing='0'>";

echo "<tr>";
echo "<th colspan='2'>Invoice Details</th>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Customer Name</b></td>";
echo "<td>$customer</td>";
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
echo "<td><b>Price per Item</b></td>";
echo "<td>₹ $price</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Total Amount</b></td>";
echo "<td>₹ $total</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Discount (10%)</b></td>";
echo "<td>₹ $discount</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>GST (5%)</b></td>";
echo "<td>₹ $gst</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Net Amount</b></td>";
echo "<td><b>₹ $netAmount</b></td>";
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