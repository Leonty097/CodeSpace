
<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Result</title>
</head>
<body>
    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Display submitted data
        echo "<h2>Form Submission Successful</h2>";
        echo "<p>Name: $username</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Pass: $password</p>";

    } else {
        header("Location: login.php");
        exit();
    }
    ?>
</body>
</html>
