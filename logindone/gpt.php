<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

    </head>
    <body>
        <h2>Registration Form</h2>
        <?php
        // Database credentials
        $db_host = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "phplogin";

        // Connect to database
        $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        // Select the password from the database
        $sql = "SELECT password FROM accounts /*WHERE name = 'myusername'*/";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $password = $row['password'];

        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Update the password in the database
        $sql = "UPDATE accounts SET password = '$hashed_password' /*WHERE username = 'myusername'*/";
        mysqli_query($conn, $sql);
        // Check if the form was submitted

        // Check if the form was submitted
        if (isset($_POST['submit'])) {
            // Retrieve form data
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            // Check if email already exists in database
            $sql = "SELECT * FROM accounts WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
               // echo "Email already exists in database"; 
                header("Location: emailexistonDB.php");
                exit;
            } else {
                // Insert new user into database
                $sql = "INSERT INTO accounts (username, email, password) VALUES ('$name', '$email', '$password')";
                if (mysqli_query($conn, $sql)) {
                   // echo "User registered successfully";
                   header("Location: userregistersucc.php");
                   exit;
                } else {
                    echo "Error: ". mysqli_error($conn);
                }
            }

            // Close database connection
            mysqli_close($conn);
        }
        ?>
 
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label>Name:</label>
            <input type="text" name="name" required><br><br>
            <label>Email:</label>
            <input type="email" name="email" required><br><br>
            <label>Password:</label>
            <input type="password" name="password" required><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>
