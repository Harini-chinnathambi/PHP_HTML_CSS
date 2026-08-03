<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
</head>

<body>

<center>

<h2>BMI Calculator</h2>

<form action="bmi.php" method="post">

<table border="1" cellpadding="10" cellspacing="0" width="500">

<tr>
<td>Weight (kg)</td>
<td>
<input type="number" name="weight" step="0.1" required>
</td>
</tr>

<tr>
<td>Height (meters)</td>
<td>
<input type="number" name="height" step="0.01" required>
</td>
</tr>

<tr>
<td colspan="2" align="center">

<input type="submit" value="Calculate BMI">

<input type="reset" value="Clear">

</td>
</tr>

</table>

</form>

</center>

</body>
</html>