<!DOCTYPE html>
<html>
<head>
    <title>String Analysis Result</title>
</head>

<body>

<center>

<h2>String Analysis Result</h2>

<?php

$title = $_POST["title"];

$vowels = 0;
$consonants = 0;
$digits = 0;
$special = 0;

$length = strlen($title);

for($i=0; $i<$length; $i++)
{
    $ch = $title[$i];

    if(ctype_alpha($ch))
    {
        if(in_array(strtolower($ch), array('a','e','i','o','u')))
        {
            $vowels++;
        }
        else
        {
            $consonants++;
        }
    }
    elseif(ctype_digit($ch))
    {
        $digits++;
    }
    elseif($ch != " ")
    {
        $special++;
    }
}

echo "<table border='1' width='600' cellpadding='10' cellspacing='0'>";

echo "<tr>";
echo "<th colspan='2'>Analysis Report</th>";
echo "</tr>";

echo "<tr><td><b>Entered Title</b></td><td>$title</td></tr>";
echo "<tr><td><b>Total Characters</b></td><td>$length</td></tr>";
echo "<tr><td><b>Vowels</b></td><td>$vowels</td></tr>";
echo "<tr><td><b>Consonants</b></td><td>$consonants</td></tr>";
echo "<tr><td><b>Digits</b></td><td>$digits</td></tr>";
echo "<tr><td><b>Special Characters</b></td><td>$special</td></tr>";

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