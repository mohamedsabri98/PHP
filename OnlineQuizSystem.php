<?php

// Start the session
session_start();

// Check if the quiz details and score are set in the session
if (!isset($_SESSION['quizId']) || !isset($_SESSION['quizScore'])) {
    header('Location: index.php');
    exit;
}

// Get the quiz details from the session
$quizId = $_SESSION['quizId'];
$quizTitle = $_SESSION['quizTitle'];
$quizDescription = $_
all in one code

Sure, here's an all-in-one PHP code for an online quiz system that includes a quiz page and a results page:

php-template
Copy
<?php

// Database configuration
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'my_database';

// Create database connection
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Define the quiz ID
$quizId = 1;

// Get the quiz details from the database
$sql = "SELECT * FROM quizzes WHERE id = '$quizId'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $quizTitle = $row['title'];
    $quizDescription = $row['description'];
    $quizTimeLimit = $row['time_limit'];
} else {
    echo "Quiz not found";
    exit;
}

// Get the quiz questions from the database
$sql = "SELECT * FROM questions WHERE quiz_id = '$quizId'";
$result = mysqli_query($conn, $sql);

$quizQuestions = array();

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $question = array(
            'id' => $row['id'],
            'question' => $row['question'],
            'options' => array(
                $row['option1'],
                $row['option2'],
                $row['option3'],
                $row['option4']
            ),
            'answer' => $row['answer']
        );
        array_push($quizQuestions, $question);
    }
} else {
    echo "No questions found for this quiz";
    exit;
}

// Start the quiz session
session_start();

// Set the quiz details in the session
$_SESSION['quizId'] = $quizId;
$_SESSION['quizTitle'] = $quizTitle;
$_SESSION['quizDescription'] = $quizDescription;
$_SESSION['quizTimeLimit'] = $quizTimeLimit;
$_SESSION['quizQuestions'] = $quizQuestions;

// Check if the quiz details are set in the session
if (!isset($_SESSION['quizId']) || !isset($_SESSION['quizQuestions'])) {
    header('Location: index.php');
    exit;
}

// Get the quiz details from the session
$quizId = $_SESSION['quizId'];
$quizTitle = $_SESSION['quizTitle'];
$quizDescription = $_SESSION['quizDescription'];
$quizTimeLimit = $_SESSION['quizTimeLimit'];
$quizQuestions = $_SESSION['quizQuestions'];

// Check if the quiz has been completed
if (isset($_POST['submitQuiz'])) {
    // Calculate the score
    $score = 0;
    foreach ($quizQuestions as $question) {
        $questionId = $question['id'];
        if ($_POST["$questionId"] == $question['answer']) {
            $score++;
        }
    }

    // Set the score in the session
    $_SESSION['quizScore'] = $score;

    // Redirect to the results page
    header('Location: results.php');
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $quizTitle; ?></title>
</head>
<body>
    <h1><?php echo $quizTitle; ?></h1>
    <p><?php echo $quizDescription; ?></p>
    <form method="post" action="">
        <?php foreach ($quizQuestions as $question) : ?>
            <h2><?php echo $question['question']; ?></h2>
            <?php foreach ($question['options'] as $option) : ?>
                <label>
                    <input type="radio" name="<?php echo $question['id']; ?>" value="<?php echo $option; ?>" required>
                    <?php echo $option; ?>
                </label>
                <br>
            <?php endforeach; ?>
            <br>
        <?php endforeach; ?>
        <input type="submit" name="submitQuiz" value="Submit Quiz">
    </form>
</body>
</html>

<?php

// Check if the quiz details and score are set in the session
if (!isset($_SESSION['quizId']) || !isset($_SESSION['quizScore'])) {
    header('Location: index.php');
    exit;
}

// Get the quiz details from the session
$quizId = $_SESSION['quizId'];
$quizTitle = $_SESSION['quizTitle'];
$quizScore = $_SESSION['quizScore'];

?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $quizTitle; ?> Results</title>
</head>
<body>
    <h1><?php echo $quizTitle; ?> Results</h1>
    <p>Your score is <?php echo $quizScore; ?>/<?php echo count($quizQuestions); ?></p>
</body>
</html>
