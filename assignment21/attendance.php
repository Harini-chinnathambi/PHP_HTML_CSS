<!DOCTYPE html>
<html>
<head>
    <title>Attendance Result</title>
</head>

<body>

<center>

<h2>Attendance Result</h2>

<?php

$name = $_POST["name"];
$regno = $_POST["regno"];
$working = $_POST["working"];
$present = $_POST["present"];

function calculatePercentage($present, $working)
{
    return ($present / $working) * 100;
}

$percentage = calculatePercentage($present, $working);

if($percentage >= 75)
{
    $status = "Eligible for Examination";
}
else
{
    $status = "Not Eligible for Examination";
}

echo "<table border='1' cellpadding='10' cellspacing='0' width='600'>";

echo "<tr>";
echo "<th colspan='2'>Attendance Details</th>";
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
echo "<td><b>Total Working Days</b></td>";
echo "<td>$working</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Days Present</b></td>";
echo "<td>$present</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Attendance Percentage</b></td>";
echo "<td>".round($percentage,2)."%</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Eligibility</b></td>";
echo "<td>$status</td>";
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