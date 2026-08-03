<!DOCTYPE html>
<html>
<head>
    <title>Attendance Processing System</title>
</head>

<body>

<center>

<h2>Attendance Processing System</h2>

<form action="attendance.php" method="post">

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
<td>Total Working Days</td>
<td><input type="number" name="working" min="1" required></td>
</tr>

<tr>
<td>Days Present</td>
<td><input type="number" name="present" min="0" required></td>
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