<!DOCTYPE html>
<html>
<head>
    <title>Insurance Premium Calculator</title>
</head>

<body>

<center>

<h2>Insurance Premium Calculator</h2>

<form action="premium.php" method="post">

<table border="1" cellpadding="10" cellspacing="0" width="550">

<tr>
<td>Policy Holder Name</td>
<td><input type="text" name="name" required></td>
</tr>

<tr>
<td>Age</td>
<td><input type="number" name="age" min="18" required></td>
</tr>

<tr>
<td>Policy Term (Years)</td>
<td><input type="number" name="term" min="1" required></td>
</tr>

<tr>
<td>Coverage Amount (₹)</td>
<td><input type="number" name="coverage" min="10000" required></td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" value="Calculate Premium">
<input type="reset" value="Clear">
</td>
</tr>

</table>

</form>

</center>

</body>
</html>