<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Mobile Bill Generator</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>📱 Mobile Bill Generator</h1>

    <p class="subtitle">
        Enter your mobile usage details
    </p>


    <form action="bill.php" method="POST">


        <label for="customer_name">
            Customer Name
        </label>

        <input
            type="text"
            id="customer_name"
            name="customer_name"
            placeholder="Enter customer name"
            required
        >


        <label for="mobile_number">
            Mobile Number
        </label>

        <input
            type="tel"
            id="mobile_number"
            name="mobile_number"
            placeholder="Enter 10-digit mobile number"
            pattern="[0-9]{10}"
            maxlength="10"
            required
        >


        <label for="plan">
            Select Tariff Plan
        </label>

        <select id="plan" name="plan" required>

            <option value="">
                Select a plan
            </option>

            <option value="Basic">
                Basic - ₹199
            </option>

            <option value="Standard">
                Standard - ₹399
            </option>

            <option value="Premium">
                Premium - ₹599
            </option>

        </select>


        <label for="data">
            Data Usage (GB)
        </label>

        <input
            type="number"
            id="data"
            name="data"
            placeholder="Enter data used"
            min="0"
            step="0.1"
            required
        >


        <label for="calls">
            Call Usage (Minutes)
        </label>

        <input
            type="number"
            id="calls"
            name="calls"
            placeholder="Enter call minutes"
            min="0"
            required
        >


        <label for="sms">
            SMS Usage
        </label>

        <input
            type="number"
            id="sms"
            name="sms"
            placeholder="Enter number of SMS"
            min="0"
            required
        >


        <button type="submit">
            Generate Bill
        </button>

    </form>


    <p class="security">
        📱 Simple and secure mobile bill calculation
    </p>

</div>

</body>

</html>