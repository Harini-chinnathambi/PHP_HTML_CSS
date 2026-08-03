<!DOCTYPE html>
<html>
<head>
    <title>Admission Application Form</title>
</head>

<body>

<center>

<h2>Admission Application Form</h2>

<form action="process.php" method="post">

<table border="1" cellpadding="10" cellspacing="0" width="550">

<tr>
<td>Applicant Name</td>
<td><input type="text" name="name" required></td>
</tr>

<tr>
<td>Date of Birth</td>
<td><input type="date" name="dob" required></td>
</tr>

<tr>
<td>Gender</td>
<td>
<input type="radio" name="gender" value="Male" required>Male
<input type="radio" name="gender" value="Female">Female
</td>
</tr>

<tr>
<td>Email</td>
<td><input type="email" name="email" required></td>
</tr>

<tr>
<td>Mobile Number</td>
<td><input type="text" name="mobile" maxlength="10" required></td>
</tr>

<tr>
<td>Course Applied</td>
<td>
<select name="course" required>
<option value="">Select</option>
<option>B.Sc Computer Science</option>
<option>BCA</option>
<option>B.Com</option>
<option>BBA</option>
<option>B.Sc Mathematics</option>
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
<input type="submit" value="Submit">
<input type="reset" value="Clear">
</td>
</tr>

</table>

</form>

</center>

</body>
</html>