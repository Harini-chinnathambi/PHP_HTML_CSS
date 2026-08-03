<!DOCTYPE html>
<html>
<head>
    <title>Patient Registration Confirmation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Patient Registration Confirmation</h2>

<?php

$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$blood = $_POST["blood"];
$mobile = $_POST["mobile"];
$address = $_POST["address"];

if(empty($name) || empty($age) || empty($gender) || empty($blood) || empty($mobile) || empty($address))
{
    echo "<h3 align='center'>Please fill all the fields.</h3>";
}
else
{

echo "<table border='1' cellpadding='10' cellspacing='0'>";

echo "<tr><th>Field</th><th>Details</th></tr>";

echo "<tr><td>Patient Name</td><td>$name</td></tr>";
echo "<tr><td>Age</td><td>$age</td></tr>";
echo "<tr><td>Gender</td><td>$gender</td></tr>";
echo "<tr><td>Blood Group</td><td>$blood</td></tr>";
echo "<tr><td>Mobile Number</td><td>$mobile</td></tr>";
echo "<tr><td>Address</td><td>$address</td></tr>";

echo "<tr>";
echo "<td colspan='2' align='center'><b>Patient Registered Successfully</b></td>";
echo "</tr>";

echo "<tr>";
echo "<td colspan='2' align='center'><a href='index.php'>Back</a></td>";
echo "</tr>";

echo "</table>";

}

?>

</div>

</body>
</html>