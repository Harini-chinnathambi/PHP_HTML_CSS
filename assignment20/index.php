<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Library Membership Registration</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<div class="icon">📚</div>
<h1>Library Membership</h1>
<p class="subtitle">Register for your library membership</p>
<form action="login.php" method="POST">
<label for="name">Member Name</label>
<input type="text" id="name" name="name" placeholder="Enter your full name" pattern="[A-Za-z ]+" required>
<label for="email">Email Address</label>
<input type="email" id="email" name="email" placeholder="Enter your email address" required>
<label for="mobile">Mobile Number</label>
<input type="tel" id="mobile" name="mobile" placeholder="Enter 10-digit mobile number" pattern="[0-9]{10}" maxlength="10" required>
<label for="dob">Date of Birth</label>
<input type="date" id="dob" name="dob" required>
<label for="membership">Membership Type</label>
<select id="membership" name="membership" required>
<option value="">Select membership type</option>
<option value="Student">Student - ₹300</option>
<option value="Regular">Regular - ₹500</option>
<option value="Premium">Premium - ₹800</option>
</select>
<label for="address">Address</label>
<textarea id="address" name="address" rows="3" placeholder="Enter your address" required></textarea>
<button type="submit">Register Membership</button>
<button type="reset" class="clear">Clear</button>
</form>
<p class="security">📖 Enjoy reading and learning with our library</p>
</div>
</body>
</html>