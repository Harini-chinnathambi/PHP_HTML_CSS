<!DOCTYPE html>
<html>
<head>
    <title>Student Mark Calculation</title>
</head>

<body>

<center>

<h2>Student Mark Calculation System</h2>

<form action="result.php" method="post">

<table border="1" cellpadding="10" cellspacing="0" width="550">

<tr>
<td>Student Name</td>
<td>
<input type="text" name="name" required>
</td>
</tr>


<tr>
<td>Register Number</td>
<td>
<input type="text" name="regno" required>
</td>
</tr>


<tr>
<td>Subject 1 Mark</td>
<td>
<input type="number" name="mark1" required>
</td>
</tr>


<tr>
<td>Subject 2 Mark</td>
<td>
<input type="number" name="mark2" required>
</td>
</tr>


<tr>
<td>Subject 3 Mark</td>
<td>
<input type="number" name="mark3" required>
</td>
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