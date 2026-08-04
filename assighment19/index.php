<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Travel Package Booking</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <div class="icon">
        ✈️
    </div>

    <h1>Travel Package Booking</h1>

    <p class="subtitle">
        Plan your journey with our travel packages
    </p>


    <form action="booking.php" method="POST">


        <label for="customer_name">
            Customer Name
        </label>

        <input
            type="text"
            id="customer_name"
            name="customer_name"
            placeholder="Enter your name"
            required
        >


        <label for="email">
            Email Address
        </label>

        <input
            type="email"
            id="email"
            name="email"
            placeholder="Enter your email"
            required
        >


        <label for="mobile">
            Mobile Number
        </label>

        <input
            type="tel"
            id="mobile"
            name="mobile"
            placeholder="Enter 10-digit mobile number"
            pattern="[0-9]{10}"
            maxlength="10"
            required
        >


        <label for="package">
            Select Travel Package
        </label>

        <select
            id="package"
            name="package"
            required
        >

            <option value="">
                Select a package
            </option>

            <option value="Goa">
                Goa Escape - ₹12,000
            </option>

            <option value="Ooty">
                Ooty Holiday - ₹8,000
            </option>

            <option value="Manali">
                Manali Adventure - ₹18,000
            </option>

            <option value="Kerala">
                Kerala Delight - ₹15,000
            </option>

        </select>


        <label for="travel_date">
            Travel Date
        </label>

        <input
            type="date"
            id="travel_date"
            name="travel_date"
            required
        >


        <label for="persons">
            Number of Travellers
        </label>

        <input
            type="number"
            id="persons"
            name="persons"
            min="1"
            max="10"
            placeholder="Enter number of travellers"
            required
        >


        <button type="submit">
            Book Package
        </button>

    </form>


    <p class="security">
        🌍 Your travel booking details are handled securely
    </p>

</div>

</body>

</html>