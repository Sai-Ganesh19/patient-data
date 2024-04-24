<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Information Form</title>
    <style>
        body {
            background-image: url('hospital image2.jpeg'); /* Add the path to your background image */
            background-size: cover;
            font-family: 'Arial', sans-serif;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        form {
    max-width: 600px;
    margin: 0 auto;
    background: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}


        h2 {
            text-align: center;
            color: #007BFF;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $reason = $_POST["reason"];

    // Validate and process the data (you can add more validation as needed)

    // Output the data in HTML format
    echo "<form>";
    echo "<h2>Patient Information Received</h2>";
    echo "<ul>";
    echo "<li><strong>First Name:</strong> $firstName</li>";
    echo "<li><strong>Last Name:</strong> $lastName</li>";
    echo "<li><strong>Date of Birth:</strong> $dob</li>";
    echo "<li><strong>Gender:</strong> $gender</li>";
    echo "<li><strong>Address:</strong> $address</li>";
    echo "<li><strong>Phone Number:</strong> $phone</li>";
    echo "<li><strong>Reason for Admitting:</strong> $reason</li>";
    echo "</ul>";
    echo "</form>";
} else {
    // Handle the case when the form is not submitted using POST method
    echo "<form>";
    echo "<h2>Patient Information Form</h2>";
    echo "<label for='firstName'>First Name:</label>";
    echo "<input type='text' name='firstName' required>";
    echo "<label for='lastName'>Last Name:</label>";
    echo "<input type='text' name='lastName' required>";
    echo "<label for='dob'>Date of Birth:</label>";
    echo "<input type='date' name='dob' required>";
    echo "<label for='gender'>Gender:</label>";
    echo "<select name='gender' required>";
    echo "<option value='male'>Male</option>";
    echo "<option value='female'>Female</option>";
    echo "</select>";
    echo "<label for='address'>Address:</label>";
    echo "<input type='text' name='address' required>";
    echo "<label for='phone'>Phone Number:</label>";
    echo "<input type='tel' name='phone' required>";
    echo "<label for='reason'>Reason for Admitting:</label>";
    echo "<textarea name='reason' rows='4' required></textarea>";
    echo "<button type='submit'>Submit</button>";
    echo "</form>";
}
?>

</body>
</html>
