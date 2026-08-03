<!DOCTYPE html>
<html>
<head>
    <title>Insurance Premium Result</title>
</head>

<body>

<center>

<h2>Insurance Policy Summary</h2>

<?php

$name = $_POST["name"];
$age = $_POST["age"];
$term = $_POST["term"];
$coverage = $_POST["coverage"];

function calculatePremium($age, $coverage)
{
    if($age <= 30)
    {
        $rate = 2;
    }
    else if($age <= 50)
    {
        $rate = 3;
    }
    else
    {
        $rate = 4;
    }

    return ($coverage * $rate) / 100;
}

$premium = calculatePremium($age, $coverage);

echo "<table border='1' cellpadding='10' cellspacing='0' width='600'>";

echo "<tr>";
echo "<th colspan='2'>Policy Details</th>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Policy Holder Name</b></td>";
echo "<td>$name</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Age</b></td>";
echo "<td>$age Years</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Policy Term</b></td>";
echo "<td>$term Years</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Coverage Amount</b></td>";
echo "<td>₹ $coverage</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Premium Amount</b></td>";
echo "<td><b>₹ $premium</b></td>";
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