<!DOCTYPE html>
<html>
<head>
    <title>Evaluation Result</title>
</head>

<body>

<center>

<h2>Employee Evaluation Result</h2>

<?php

$name = $_POST["name"];
$empid = $_POST["empid"];
$score = $_POST["score"];

if($score >= 90)
{
    $rating = "Excellent";
}
else if($score >= 75)
{
    $rating = "Very Good";
}
else if($score >= 60)
{
    $rating = "Good";
}
else if($score >= 50)
{
    $rating = "Average";
}
else
{
    $rating = "Needs Improvement";
}

echo "<table border='1' cellpadding='10' cellspacing='0' width='600'>";

echo "<tr>";
echo "<th colspan='2'>Performance Details</th>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Employee Name</b></td>";
echo "<td>$name</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Employee ID</b></td>";
echo "<td>$empid</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Performance Score</b></td>";
echo "<td>$score</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Performance Rating</b></td>";
echo "<td><b>$rating</b></td>";
echo "</tr>";

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