<!DOCTYPE html>
<html>
<head>
    <title>Applicant Validation System</title>
</head>

<body>

<center>

<h2>Applicant Validation System</h2>

<form action="validate.php" method="post">

<table border="1" width="550" cellpadding="10" cellspacing="0">

<tr>
<td>Applicant Name</td>
<td><input type="text" name="name" required></td>
</tr>

<tr>
<td>Email ID</td>
<td><input type="email" name="email" required></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="password" required></td>
</tr>

<tr>
<td>Mobile Number</td>
<td><input type="text" name="mobile" maxlength="10" required></td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" value="Validate">
<input type="reset" value="Clear">
</td>
</tr>

</table>

</form>

</center>

</body>
</html>