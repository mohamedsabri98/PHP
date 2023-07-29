
<?php
    include 'databaseconn.php';
    class saveText extends dbconn{
        public function save(){
            session_start();
            $con = new dbconn();
            $con = $this->connect();
    
            // Check if the form has been submitted
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save'])) {
                // Get the text from the POST request
                $text = $_POST['text'];
                // Insert the text into the database
                $sql = "INSERT INTO article (userart) VALUES ('$text')";
                if ($con->query($sql) === TRUE) {
                    echo "Text saved successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $con->error;
                }
                $con->close();
            }
        }
    }
?>
<html>
    <head>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <textarea name="text"></textarea>
        <br>
        <input type="submit" name="save">
        </form>
       <!-- <textarea col="500" rows="20 ">image</textarea>
        <input type="file" name="fileToUpload" ></br></br>

        <input type="submit" value="save all"></br></br>

        <a href ="http://localhost/test/index.php">GO For Login Page </a>-->

    </body>
   
</html>