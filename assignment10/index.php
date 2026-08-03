<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Calculator</title>
</head>

<body>

<center>

<h2>Electricity Bill Calculator</h2>

<form action="bill.php" method="post">

<table border="1" width="500" cellpadding="10" cellspacing="0">

<tr>
<td>Consumer Name</td>
<td><input type="text" name="name" required></td>
</tr>

<tr>
<td>Consumer Number</td>
<td><input type="text" name="number" required></td>
</tr>

<tr>
<td>Units Consumed</td>
<td><input type="number" name="units" min="0" required></td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" value="Calculate Bill">
<input type="reset" value="Clear">
</td>
</tr>

</table>

</form>

</center>

</body>
</html>