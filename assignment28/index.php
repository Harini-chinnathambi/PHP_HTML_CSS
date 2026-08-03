<!DOCTYPE html>
<html>
<head>
    <title>Parent–Teacher Meeting Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Parent–Teacher Meeting Registration</h2>

<form action="confirmation.php" method="post">

<table>

<tr>
<td>Parent Name</td>
<td><input type="text" name="parent" required></td>
</tr>

<tr>
<td>Student Name</td>
<td><input type="text" name="student" required></td>
</tr>

<tr>
<td>Class</td>
<td><input type="text" name="class" required></td>
</tr>

<tr>
<td>Teacher Name</td>
<td><input type="text" name="teacher" required></td>
</tr>

<tr>
<td>Meeting Date</td>
<td><input type="date" name="date" required></td>
</tr>

<tr>
<td>Meeting Slot</td>
<td>
<select name="slot" required>
<option value="">--Select Slot--</option>
<option>09:00 AM - 09:30 AM</option>
<option>09:30 AM - 10:00 AM</option>
<option>10:00 AM - 10:30 AM</option>
<option>10:30 AM - 11:00 AM</option>
<option>11:00 AM - 11:30 AM</option>
</select>
</td>
</tr>

<tr>
<td>Purpose of Meeting</td>
<td>
<textarea name="purpose" rows="4" cols="25" required></textarea>
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