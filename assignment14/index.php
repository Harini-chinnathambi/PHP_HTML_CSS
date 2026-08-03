<!DOCTYPE html>
<html>
<head>
    <title>Sales Calculator</title>
</head>

<body>

<center>

<h2>Sales Calculator</h2>

<form action="sales.php" method="post">

<table border="1" cellpadding="10" cellspacing="0" width="550">

<tr>
<td>Product Name</td>
<td><input type="text" name="product" required></td>
</tr>

<tr>
<td>Quantity</td>
<td><input type="number" name="quantity" min="1" required></td>
</tr>

<tr>
<td>Price per Unit (₹)</td>
<td><input type="number" name="price" min="1" required></td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" value="Calculate">
<input type="reset" value="Clear">
</td>
</tr>

</table>

</form>

</center>

</body>
</html>