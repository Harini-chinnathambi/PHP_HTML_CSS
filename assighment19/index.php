<!DOCTYPE html>
<html>
<head>
    <title>Online Registration Form</title>
</head>

<body>

<center>

<h2>Online Registration Form</h2>

<form action="register.php" method="post">

<table border="1" cellpadding="10" cellspacing="0" width="600">

<tr>
<td>Name</td>
<td>
<input type="text" name="name" required>
</td>
</tr>


<tr>
<td>Email</td>
<td>
<input type="email" name="email" required>
</td>
</tr>


<tr>
<td>Password</td>
<td>
<input type="password" name="password" required>
</td>
</tr>


<tr>
<td>Gender</td>
<td>

<input type="radio" name="gender" value="Male" required>
Male

<input type="radio" name="gender" value="Female">
Female

</td>
</tr>


<tr>
<td>Course</td>
<td>

<select name="course">

<option>B.Sc Computer Science</option>
<option>BCA</option>
<option>B.Com</option>
<option>BBA</option>

</select>

</td>
</tr>


<tr>
<td>Address</td>
<td>
<textarea name="address" rows="4" cols="25"></textarea>
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

</center>

</body>
</html>