<?php

/*
    Function to generate a secure password
*/
function generatePassword($length)
{

    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

    $lowercase = "abcdefghijklmnopqrstuvwxyz";

    $digits = "0123456789";

    $specialCharacters = "!@#$%^&*";

    $allCharacters =
        $uppercase .
        $lowercase .
        $digits .
        $specialCharacters;


    /*
        Make sure the password contains
        at least one character from each group
    */

    $password = "";

    $password .=
        $uppercase[random_int(0, strlen($uppercase) - 1)];

    $password .=
        $lowercase[random_int(0, strlen($lowercase) - 1)];

    $password .=
        $digits[random_int(0, strlen($digits) - 1)];

    $password .=
        $specialCharacters[
            random_int(0, strlen($specialCharacters) - 1)
        ];


    /*
        Generate remaining characters
    */

    for ($i = 4; $i < $length; $i++) {

        $password .=
            $allCharacters[
                random_int(
                    0,
                    strlen($allCharacters) - 1
                )
            ];
    }


    /*
        Shuffle the generated password
    */

    return str_shuffle($password);
}


/* Get password length */

$length = $_POST["length"] ?? "";


/* Validate input */

$error = "";

if ($length === "") {

    $error = "Please enter password length.";

} elseif (!is_numeric($length)) {

    $error = "Password length must be a number.";

} elseif ($length < 8 || $length > 30) {

    $error = "Password length must be between 8 and 30.";

}


/* Generate password */

if ($error == "") {

    $password = generatePassword((int)$length);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Generated Password</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<?php if ($error != "") { ?>

    <div class="error">

        <?php echo htmlspecialchars($error); ?>

    </div>


    <a href="index.php" class="back">
        Back to Password Generator
    </a>


<?php } else { ?>


    <div class="success">

        Password Generated Successfully!

    </div>


    <div class="icon">
        🔐
    </div>

    <h1>Your Password</h1>

    <p class="subtitle">
        A password with uppercase, lowercase,
        digits and special characters
    </p>


    <div class="password-box">

        <?php echo htmlspecialchars($password); ?>

    </div>


    <div class="details">

        <p>
            <b>Password Length:</b>
            <?php echo $length; ?> characters
        </p>

        <p>
            <b>Uppercase:</b>
            Included ✓
        </p>

        <p>
            <b>Lowercase:</b>
            Included ✓
        </p>

        <p>
            <b>Digits:</b>
            Included ✓
        </p>

        <p>
            <b>Special Characters:</b>
            Included ✓
        </p>

    </div>


    <a href="index.php" class="back">
        Generate Another Password
    </a>


<?php } ?>

</div>

</body>

</html>