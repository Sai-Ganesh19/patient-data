<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check admin credentials (you should replace these with your actual admin credentials)
    $adminUsername = "jothish";
    $adminPassword = "jo123";

    // Get user input
    $inputUsername = $_POST["adminUsername"];
    $inputPassword = $_POST["adminPassword"];

    // Check if credentials are valid
    if ($inputUsername == $adminUsername && $inputPassword == $adminPassword) {
        // Redirect to the patient information form
        header("Location: jo.html");
        exit();
    } else {
        // Display an error message (you can customize this part)
        $errorMessage = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #loginForm {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div id="loginForm">
        <h2>Login</h2>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="adminUsername">Admin Username:</label>
            <input type="text" id="adminUsername" name="adminUsername" required>

            <label for="adminPassword">Admin Password:</label>
            <input type="password" id="adminPassword" name="adminPassword" required>

            <button type="submit">Login</button>

            <?php
            // Display error message if login fails
            if (isset($errorMessage)) {
                echo '<p class="error">' . $errorMessage . '</p>';
            }
            ?>
        </form>
    </div>

</body>

</html>
