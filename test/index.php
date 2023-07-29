<html>
    <head>
        <title>Registration Form</title>
        <!----CSS link----->
        <link rel="stylesheet" type="text/css" href="st.css" /> 
    </head>
    <body>
        <!-----------------PHP------------------------->

        <!-----------------CSS------------------->
        <style>
            body {
                background-color: rgb(138, 215, 245);
                background-image: linear-gradient(to right ,skyblue , white);
                }
                @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
                
            form{
                /*border: 3px solid #f1f1f1;*/
                width: 500px;
                border: 3px solid skyblue;
                /*background-color: blue;*/
                text-align: center;
                }
            input[type=text], input[type=password],input[type=confirm_password],input[type=email] {
                width: 100%;
                padding: 15px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
                }
            input[type=submit] {
                background-color: #04AA6D;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 50%;
                }     
        </style>
        <h2> login here</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <!--<label> Name:</label>
            <input type="text" name="name" required><br><br>-->
            <label>Email:</label>
            <input type="email" name="email" required><br><br>
            <label>Password:</label>
            <input type="password" name="password" required><br><br>
            <input type="submit" name="submit" value="login">
        </form>
        <?php            
            if (isset($_POST["submit"]))
            {
                header("Location:emailexistonDB.php");
                exit;
        
            }
        ?>

    </body>
    <body>
        <h2>Registration Form</h2>
        <form action="" method="post">
                <label for="name">Name:</label>
                <input type="text"  name="name" required><br><br>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>
        
                <<label for="confirm_password"> Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required><br><br>
                
                <input type="submit" name = "submit" value="register"><br><br>
            </form>

    </body>
</html>