<!DOCTYPE html>
<html>
<head>
    <title>SecureBank Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="login-box">

    <h1>🏦 SecureBank</h1>
    <p>Online Banking Login</p>

    <form action="login.php" method="POST">

        <label>Customer ID</label>

        <input type="text"
               name="customer_id"
               placeholder="Enter Customer ID"
               required>

        <label>Password</label>

        <input type="password"
               name="password"
               placeholder="Enter Password"
               required>

        <button type="submit">
            Login
        </button>

    </form>

</div>

</body>
</html>