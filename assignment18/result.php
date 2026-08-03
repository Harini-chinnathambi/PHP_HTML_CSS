<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
</head>

<body>

<center>

<h2>Student Result</h2>

<?php

$name = $_POST["name"];
$regno = $_POST["regno"];

$mark1 = $_POST["mark1"];
$mark2 = $_POST["mark2"];
$mark3 = $_POST["mark3"];


function calculateAverage($mark1, $mark2, $mark3)
{
    $total = $mark1 + $mark2 + $mark3;
    $average = $total / 3;

    return array($total, $average);
}


$result = calculateAverage($mark1, $mark2, $mark3);

$total = $result[0];
$average = $result[1];


if($average >= 90)
{
    $grade = "A+";
}
else if($average >= 80)
{
    $grade = "A";
}
else if($average >= 70)
{
    $grade = "B";
}
else if($average >= 60)
{
    $grade = "C";
}
else
{
    $grade = "Fail";
}


echo "<table border='1' cellpadding='10' cellspacing='0' width='600'>";


echo "<tr>";
echo "<th colspan='2'>Mark Details</th>";
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
echo "<td>$total / 300</td>";
echo "</tr>";


echo "<tr>";
echo "<td><b>Average</b></td>";
echo "<td>".round($average,2)."</td>";
echo "</tr>";


echo "<tr>";
echo "<td><b>Grade</b></td>";
echo "<td>$grade</td>";
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