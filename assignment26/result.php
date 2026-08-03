<!DOCTYPE html>
<html>
<head>
    <title>Result Analysis</title>
</head>

<body>

<center>

<h2>Examination Result Analysis</h2>

<?php

$name = $_POST["name"];
$regno = $_POST["regno"];
$mark1 = $_POST["mark1"];
$mark2 = $_POST["mark2"];
$mark3 = $_POST["mark3"];

function calculatePercentage($m1, $m2, $m3)
{
    $total = $m1 + $m2 + $m3;
    return ($total / 300) * 100;
}

$percentage = calculatePercentage($mark1, $mark2, $mark3);

if($percentage >= 75)
{
    $class = "Distinction";
}
else if($percentage >= 60)
{
    $class = "First Class";
}
else if($percentage >= 50)
{
    $class = "Second Class";
}
else if($percentage >= 40)
{
    $class = "Third Class";
}
else
{
    $class = "Fail";
}

echo "<table border='1' cellpadding='10' cellspacing='0' width='600'>";

echo "<tr>";
echo "<th colspan='2'>Student Result</th>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Student Name</b></td>";
echo "<td>$name</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Register Number</b></td>";
echo "<td>$regno</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Total Marks</b></td>";
echo "<td>".($mark1+$mark2+$mark3)." / 300</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Percentage</b></td>";
echo "<td>".round($percentage,2)."%</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Class Obtained</b></td>";
echo "<td><b>$class</b></td>";
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