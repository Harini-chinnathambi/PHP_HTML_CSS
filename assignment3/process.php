<!DOCTYPE html>
<html>
<head>
    <title>Admission Acknowledgement</title>
</head>

<body>

<center>

<h2>Admission Acknowledgement</h2>

<?php

$name = $_POST["name"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$course = $_POST["course"];
$address = $_POST["address"];

if(empty($name) || empty($dob) || empty($gender) || empty($email) || empty($mobile) || empty($course) || empty($address))
{
    echo "<h3>All fields are mandatory.</h3>";
    echo "<a href='index.php'>Go Back</a>";
}
else
{

echo "<table border='1' width='650' cellpadding='10' cellspacing='0'>";

echo "<tr>";
echo "<th colspan='2'>Admission Application Details</th>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Applicant Name</b></td>";
echo "<td>$name</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Date of Birth</b></td>";
echo "<td>$dob</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Gender</b></td>";
echo "<td>$gender</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Email</b></td>";
echo "<td>$email</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Mobile Number</b></td>";
echo "<td>$mobile</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Course Applied</b></td>";
echo "<td>$course</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Address</b></td>";
echo "<td>$address</td>";
echo "</tr>";

echo "<tr>";
echo "<td colspan='2' align='center'>";
echo "<h3>Admission Application Submitted Successfully</h3>";
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

</center>

</body>
</html>