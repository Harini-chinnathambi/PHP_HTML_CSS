<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Customer Registration Form</h2>

<form action="register.php" method="post">

<table>

<tr>
<td>Customer Name</td>
<td><input type="text" name="name" required></td>
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
<td>Gender</td>
<td>
<input type="radio" name="gender" value="Male" required> Male
<input type="radio" name="gender" value="Female"> Female
</td>
</tr>

<tr>
<td>City</td>
<td>
<select name="city" required>
<option value="">--Select City--</option>
<option>Chennai</option>
<option>Coimbatore</option>
<option>Madurai</option>
<option>Salem</option>
<option>Namakkal</option>
</select>
</td>
</tr>

<tr>
<td>Address</td>
<td>
<textarea name="address" rows="4" cols="25" required></textarea>
</td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" value="Register">
<input type="reset" value="Clear">
</td>
</tr>

</table>

</form>

</div>

</body>
</html>