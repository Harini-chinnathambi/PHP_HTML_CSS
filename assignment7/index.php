<!DOCTYPE html>
<html>
<head>
    <title>Course Registration System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Course Registration Form</h2>

<form action="process.php" method="post">

<table>

<tr>
<td>Student Name</td>
<td><input type="text" name="name" required></td>
</tr>

<tr>
<td>Register Number</td>
<td><input type="text" name="regno" required></td>
</tr>

<tr>
<td>Email ID</td>
<td><input type="email" name="email" required></td>
</tr>

<tr>
<td>Mobile Number</td>
<td><input type="text" name="mobile" pattern="[0-9]{10}" required></td>
</tr>

<tr>
<td>Course</td>
<td>
<select name="course" required>
<option value="">Select Course</option>
<option>HTML</option>
<option>CSS</option>
<option>JavaScript</option>
<option>PHP</option>
</select>
</td>
</tr>

<tr>
<td>Batch</td>
<td>
<select name="batch" required>
<option value="">Select Batch</option>
<option>Morning</option>
<option>Afternoon</option>
<option>Evening</option>
</select>
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