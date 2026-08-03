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
$html = $_POST["html"];
$css = $_POST["css"];
$php = $_POST["php"];

function calculateTotal($m1, $m2, $m3)
{
    return $m1 + $m2 + $m3;
}

function calculateAverage($total)
{
    return $total / 3;
}

function calculateGrade($average)
{
    if($average >= 90)
    {
        return "A+";
    }
    elseif($average >= 80)
    {
        return "A";
    }
    elseif($average >= 70)
    {
        return "B";
    }
    elseif($average >= 60)
    {
        return "C";
    }
    elseif($average >= 50)
    {
        return "D";
    }
    else
    {
        return "Fail";
    }
}

$total = calculateTotal($html, $css, $php);
$average = calculateAverage($total);
$grade = calculateGrade($average);

echo "<table border='1' width='600' cellpadding='10' cellspacing='0'>";

echo "<tr>";
echo "<th colspan='2'>Student Result Details</th>";
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
echo "<td><b>HTML Marks</b></td>";
echo "<td>$html</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>CSS Marks</b></td>";
echo "<td>$css</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>PHP Marks</b></td>";
echo "<td>$php</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Total Marks</b></td>";
echo "<td>$total</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Average Marks</b></td>";
echo "<td>" . number_format($average,2) . "</td>";
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