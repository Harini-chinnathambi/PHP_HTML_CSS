<!DOCTYPE html>
<html>
<head>
    <title>Employee Information Portal</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Employee Information Portal</h2>

<form action="profile.php" method="post">

<table>

<tr>
<td>Employee Name</td>
<td><input type="text" name="name" required></td>
</tr>

<tr>
<td>Employee ID</td>
<td><input type="text" name="empid" required></td>
</tr>

<tr>
<td>Department</td>
<td>
<select name="department" required>
<option value="">--Select--</option>
<option>HR</option>
<option>IT</option>
<option>Finance</option>
<option>Marketing</option>
</select>
</td>
</tr>

<tr>
<td>Email</td>
<td><input type="email" name="email" required></td>
</tr>

<tr>
<td>Mobile Number</td>
<td><input type="tel" name="mobile" pattern="[0-9]{10}" required></td>
</tr>

<tr>
<td>Address</td>
<td>
<textarea name="address" rows="4" cols="25" required></textarea>
</td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Clear">
</td>
</tr>

</table>

</form>

</div>

</body>
</html>