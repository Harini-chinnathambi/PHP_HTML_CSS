<!DOCTYPE html>
<html>
<head>
    <title>Employee Salary Calculator</title>
</head>

<body>

<center>

<h2>Employee Salary Calculator</h2>

<form action="salary.php" method="post">

<table border="1" cellpadding="10" cellspacing="0" width="550">

<tr>
<td>Employee Name</td>
<td>
<input type="text" name="name" required>
</td>
</tr>

<tr>
<td>Basic Salary (₹)</td>
<td>
<input type="number" name="basic" required>
</td>
</tr>

<tr>
<td>HRA (%)</td>
<td>
<input type="number" name="hra" required>
</td>
</tr>

<tr>
<td>DA (%)</td>
<td>
<input type="number" name="da" required>
</td>
</tr>

<tr>
<td colspan="2" align="center">

<input type="submit" value="Calculate Salary">

<input type="reset" value="Clear">

</td>
</tr>

</table>

</form>

</center>

</body>
</html>