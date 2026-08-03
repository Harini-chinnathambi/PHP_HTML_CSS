<!DOCTYPE html>
<html>
<head>
    <title>Login Result</title>
</head>

<body>

<center>

<h2>Login Status</h2>

<?php

$username = $_POST["username"];
$password = $_POST["password"];


// Predefined login details

$valid_username = "admin";
$valid_password = "12345";


echo "<table border='1' cellpadding='10' cellspacing='0' width='500'>";


echo "<tr>";
echo "<th colspan='2'>Login Details</th>";
echo "</tr>";


echo "<tr>";
echo "<td><b>Username</b></td>";
echo "<td>$username</td>";
echo "</tr>";


if($username == $valid_username && $password == $valid_password)
{

    echo "<tr>";
    echo "<td colspan='2' align='center'>";
    echo "<b>Login Successful</b>";
    echo "</td>";
    echo "</tr>";

}
else
{

    echo "<tr>";
    echo "<td colspan='2' align='center'>";
    echo "<b>Invalid Username or Password</b>";
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