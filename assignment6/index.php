<!DOCTYPE html>
<html>
<head>
    <title>Employee Email ID Generator</title>
</head>

<body>

<center>

<h2>Employee Email ID Generator</h2>

<form action="email.php" method="post">

<table border="1" width="500" cellpadding="10" cellspacing="0">

<tr>
<td>Employee First Name</td>
<td><input type="text" name="fname" required></td>
</tr>

<tr>
<td>Employee Last Name</td>
<td><input type="text" name="lname" required></td>
</tr>

<tr>
<td>Department</td>
<td>
<select name="department" required>
<option value="">Select</option>
<option>HR</option>
<option>Sales</option>
<option>Marketing</option>
<option>Finance</option>
<option>IT</option>
</select>
</td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" value="Generate Email">
<input type="reset" value="Clear">
</td>
</tr>

</table>

</form>

</center>

</body>
</html>