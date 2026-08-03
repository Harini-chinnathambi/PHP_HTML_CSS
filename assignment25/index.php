<!DOCTYPE html>
<html>
<head>
    <title>Employee Performance Evaluation System</title>
</head>

<body>

<center>

<h2>Employee Performance Evaluation System</h2>

<form action="evaluation.php" method="post">

<table border="1" cellpadding="10" cellspacing="0" width="550">

<tr>
<td>Employee Name</td>
<td><input type="text" name="name" required></td>
</tr>

<tr>
<td>Employee ID</td>
<td><input type="text" name="empid" required></td>
</tr>

<tr>
<td>Performance Score (0 - 100)</td>
<td>
<input type="number" name="score" min="0" max="100" required>
</td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" value="Evaluate">
<input type="reset" value="Clear">
</td>
</tr>

</table>

</form>

</center>

</body>
</html>