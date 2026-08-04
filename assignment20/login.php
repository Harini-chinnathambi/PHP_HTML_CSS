<?php
$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$mobile = trim($_POST["mobile"] ?? "");
$dob = $_POST["dob"] ?? "";
$membership = $_POST["membership"] ?? "";
$address = trim($_POST["address"] ?? "");
$error = "";
if ($name == "") $error = "Please enter member name.";
elseif (!preg_match("/^[A-Za-z ]+$/", $name)) $error = "Name should contain only letters.";
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $error = "Please enter a valid email address.";
elseif (!preg_match("/^[0-9]{10}$/", $mobile)) $error = "Please enter a valid 10-digit mobile number.";
elseif ($dob == "") $error = "Please select your date of birth.";
elseif ($membership == "") $error = "Please select a membership type.";
elseif ($address == "") $error = "Please enter your address.";
if ($error == "") {
$membershipId = "LIB" . rand(1000,9999);
if ($membership == "Student") $fee = 300;
elseif ($membership == "Regular") $fee = 500;
else $fee = 800;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Membership Information</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<?php if ($error != "") { ?>
<div class="error"><?php echo htmlspecialchars($error); ?></div>
<a href="index.php" class="back">Back to Registration</a>
<?php } else { ?>
<div class="success">Membership Registered Successfully!</div>
<div class="icon">📚</div>
<h1>Membership Information</h1>
<p class="subtitle">Welcome to our library</p>
<div class="details">
<p><span>Membership ID</span><strong><?php echo $membershipId; ?></strong></p>
<p><span>Member Name</span><strong><?php echo htmlspecialchars($name); ?></strong></p>
<p><span>Email Address</span><strong><?php echo htmlspecialchars($email); ?></strong></p>
<p><span>Mobile Number</span><strong><?php echo htmlspecialchars($mobile); ?></strong></p>
<p><span>Date of Birth</span><strong><?php echo htmlspecialchars($dob); ?></strong></p>
<p><span>Membership Type</span><strong><?php echo htmlspecialchars($membership); ?></strong></p>
<p><span>Membership Fee</span><strong>₹<?php echo number_format($fee,2); ?></strong></p>
<p><span>Address</span><strong><?php echo htmlspecialchars($address); ?></strong></p>
</div>
<div class="message">Your library membership has been successfully created. Please keep your Membership ID for future reference.</div>
<a href="index.php" class="back">Register Another Member</a>
<?php } ?>
</div>
</body>
</html>