<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Password Generator</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <div class="icon">
        🔐
    </div>

    <h1>Password Generator</h1>

    <p class="subtitle">
        Create a secure password using different character types
    </p>


    <form action="generate.php" method="POST">

        <label for="length">
            Password Length
        </label>

        <input
            type="number"
            id="length"
            name="length"
            min="8"
            max="30"
            placeholder="Enter length (8-30)"
            required
        >


        <div class="info">

            <p>Generated password will include:</p>

            <ul>
                <li>Uppercase letters (A-Z)</li>
                <li>Lowercase letters (a-z)</li>
                <li>Digits (0-9)</li>
                <li>Special characters</li>
            </ul>

        </div>


        <button type="submit">
            Generate Password
        </button>

    </form>


    <p class="security">
        🔒 Your password is generated locally using PHP
    </p>

</div>

</body>

</html>