<!DOCTYPE html>
<html>
<head>
    <title>Online Voting System</title>
</head>

<body>

<center>

<h2>Online Voting System</h2>

<form action="vote.php" method="post">

<table border="1" cellpadding="10" cellspacing="0" width="500">

<tr>
<td>Voter Name</td>
<td>
<input type="text" name="name" required>
</td>
</tr>

<tr>
<td>Age</td>
<td>
<input type="number" name="age" required>
</td>
</tr>

<tr>
<td>Select Candidate</td>
<td>

<input type="radio" name="candidate" value="Candidate A" required>
Candidate A

<br>

<input type="radio" name="candidate" value="Candidate B">
Candidate B

<br>

<input type="radio" name="candidate" value="Candidate C">
Candidate C

</td>
</tr>


<tr>
<td colspan="2" align="center">

<input type="submit" value="Vote">

<input type="reset" value="Clear">

</td>
</tr>

</table>

</form>

</center>

</body>
</html>