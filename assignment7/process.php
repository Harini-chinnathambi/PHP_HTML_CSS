<!DOCTYPE html>
<html>
<head>
    <title>Registration Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Course Registration Details</h2>

<?php

$name = $_POST["name"];
$regno = $_POST["regno"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$course = $_POST["course"];
$batch = $_POST["batch"];

if(empty($name) || empty($regno) || empty($email) || empty($mobile) || empty($course) || empty($batch))
{
    echo "<h3 align='center'>Please fill all the fields.</h3>";
}
else
{

echo "<table border='1' cellpadding='10' cellspacing='0'>";

echo "<tr>";
echo "<th>Field</th>";
echo "<th>Details</th>";
echo "</tr>";

echo "<tr><td>Student Name</td><td>$name</td></tr>";
echo "<tr><td>Register Number</td><td>$regno</td></tr>";
echo "<tr><td>Email ID</td><td>$email</td></tr>";
echo "<tr><td>Mobile Number</td><td>$mobile</td></tr>";
echo "<tr><td>Course</td><td>$course</td></tr>";
echo "<tr><td>Batch</td><td>$batch</td></tr>";

echo "<tr>";
echo "<td colspan='2' align='center'>";
echo "<b>Registration Successful</b>";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td colspan='2' align='center'>";
echo "<a href='index.php'>Back</a>";
echo "</td>";
echo "</tr>";

echo "</table>";

}

?>

</div>

</body>
</html>