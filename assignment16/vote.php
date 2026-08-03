<!DOCTYPE html>
<html>
<head>
    <title>Voting Result</title>
</head>

<body>

<center>

<h2>Voting Result</h2>

<?php

$name = $_POST["name"];
$age = $_POST["age"];
$candidate = $_POST["candidate"];


echo "<table border='1' cellpadding='10' cellspacing='0' width='500'>";


echo "<tr>";
echo "<th colspan='2'>Voter Details</th>";
echo "</tr>";


echo "<tr>";
echo "<td><b>Voter Name</b></td>";
echo "<td>$name</td>";
echo "</tr>";


echo "<tr>";
echo "<td><b>Age</b></td>";
echo "<td>$age</td>";
echo "</tr>";


echo "<tr>";
echo "<td><b>Selected Candidate</b></td>";
echo "<td>$candidate</td>";
echo "</tr>";


if($age >= 18)
{
    echo "<tr>";
    echo "<td colspan='2' align='center'>";
    echo "<b>Your vote has been submitted successfully.</b>";
    echo "</td>";
    echo "</tr>";
}
else
{
    echo "<tr>";
    echo "<td colspan='2' align='center'>";
    echo "<b>You are not eligible for voting.</b>";
    echo "</td>";
    echo "</tr>";
}


echo "<tr>";
echo "<td colspan='2' align='center'>";
echo "<a href='index.php'>Back</a>";
echo "</td>";
echo "</tr>";


echo "</table>";

?>

</center>

</body>
</html>