<!DOCTYPE html>
<html>
<head>
    <title>Examination Result Analysis System</title>
</head>

<body>

<center>

<h2>Examination Result Analysis System</h2>

<form action="result.php" method="post">

<table border="1" cellpadding="10" cellspacing="0" width="550">

<tr>
<td>Student Name</td>
<td><input type="text" name="name" required></td>
</tr>

<tr>
<td>Register Number</td>
<td><input type="text" name="regno" required></td>
</tr>

<tr>
<td>Subject 1 Marks</td>
<td><input type="number" name="mark1" min="0" max="100" required></td>
</tr>

<tr>
<td>Subject 2 Marks</td>
<td><input type="number" name="mark2" min="0" max="100" required></td>
</tr>

<tr>
<td>Subject 3 Marks</td>
<td><input type="number" name="mark3" min="0" max="100" required></td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" value="Analyze Result">
<input type="reset" value="Clear">
</td>
</tr>

</table>

</form>

</center>

</body>
</html>