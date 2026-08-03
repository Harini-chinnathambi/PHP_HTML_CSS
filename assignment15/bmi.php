<!DOCTYPE html>
<html>
<head>
    <title>BMI Result</title>
</head>

<body>

<center>

<h2>BMI Calculation Result</h2>

<?php

$weight = $_POST["weight"];
$height = $_POST["height"];

function calculateBMI($weight, $height)
{
    return $weight / ($height * $height);
}


$bmi = calculateBMI($weight, $height);


if($bmi < 18.5)
{
    $category = "Underweight";
}
else if($bmi >= 18.5 && $bmi < 25)
{
    $category = "Normal Weight";
}
else if($bmi >= 25 && $bmi < 30)
{
    $category = "Overweight";
}
else
{
    $category = "Obese";
}


echo "<table border='1' cellpadding='10' cellspacing='0' width='500'>";

echo "<tr>";
echo "<th colspan='2'>BMI Details</th>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Weight</b></td>";
echo "<td>$weight kg</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Height</b></td>";
echo "<td>$height meters</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>BMI Value</b></td>";
echo "<td>".round($bmi,2)."</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Category</b></td>";
echo "<td>$category</td>";
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