<!DOCTYPE html>
<html>
<head>
    <title>Student Result Processing System</title>
</head>

<body>

<center>

<h2>Student Result Processing System</h2>

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
<td>HTML Marks</td>
<td><input type="number" name="html" min="0" max="100" required></td>
</tr>

<tr>
<td>CSS Marks</td>
<td><input type="number" name="css" min="0" max="100" required></td>
</tr>

<tr>
<td>PHP Marks</td>
<td><input type="number" name="php" min="0" max="100" required></td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" value="Calculate Result">
<input type="reset" value="Clear">
</td>
</tr>

</table>

</form>

</center>

</body>
</html>