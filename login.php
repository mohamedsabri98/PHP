
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style>
		/* CSS code for styling */
	</style>
</head>
<body>
	<div class="login-box">
		<h2>Login</h2>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<label>Username</label>
			<input type="text" name="username" placeholder="Enter Username">

			<label>Password</label>
			<input type="password" name="password" placeholder="Enter Password">

			<button type="submit" name="login">Login</button>
		</form>
		<?php
			// Start the session
			session_start();

			// Check if login form is submitted
			if (isset($_POST['login'])) {
				// Connect to database
				$conn = mysqli_connect("localhost", "username", "password", "dbname");

				// Check connection
				if (!$conn) {
		    		die("Connection failed: " . mysqli_connect_error());
				}

				// Get username and password from form
				$username = mysqli_real_escape_string($conn, $_POST['username']);
				$password = mysqli_real_escape_string($conn, $_POST['password']);

				// Query database for user with matching username and password
				$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
				$result = mysqli_query($conn, $sql);

				// Check if user exists
				if (mysqli_num_rows($result) == 1) {
					// User exists, set session variables and redirect to dashboard
					$_SESSION['username'] = $username;
					header("Location: dashboard.php");
				}
				else {
					// User does not exist, display error message
					echo "Invalid username or password";
				}

				// Close database connection
				mysqli_close($conn);
			}
		?>
	</div>
</body>
</html>



