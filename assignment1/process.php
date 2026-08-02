<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>

<body bgcolor="#F5F5F5">

<table width="100%" height="100%">
    <tr>
        <td align="center" valign="middle">

            <h2>Student Details</h2>

            <?php

            $studentName = $_POST["studentName"];
            $registerNumber = $_POST["registerNumber"];
            $department = $_POST["department"];
            $year = $_POST["year"];
            $email = $_POST["email"];
            $mobile = $_POST["mobile"];

            echo "<table border='1' width='600' height='350' cellpadding='10' cellspacing='0'>";

            echo "<tr>";
            echo "<th colspan='2'>Student Information</th>";
            echo "</tr>";

            echo "<tr>";
            echo "<td align='center'><b>Student Name</b></td>";
            echo "<td align='center'>$studentName</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td align='center'><b>Register Number</b></td>";
            echo "<td align='center'>$registerNumber</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td align='center'><b>Department</b></td>";
            echo "<td align='center'>$department</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td align='center'><b>Year</b></td>";
            echo "<td align='center'>$year</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td align='center'><b>Email ID</b></td>";
            echo "<td align='center'>$email</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td align='center'><b>Mobile Number</b></td>";
            echo "<td align='center'>$mobile</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td colspan='2' align='center'>";
            echo "<br>";
            echo "<button onclick=\"window.location.href='index.html'\">Back</button>";
            echo "<br><br>";
            echo "</td>";
            echo "</tr>";

            echo "</table>";

            ?>

        </td>
    </tr>
</table>

</body>
</html>