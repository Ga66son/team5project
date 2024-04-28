<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get in touch reply</title>
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>
    <?php
        include_once 'functions.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {       
            $fullName = $_POST['fullName'];
            $email = $_POST['email'];
            $contactPhone = $_POST['contactPhone'];
            $message = $_POST['message'];

            // Check if any of the fields are empty
            if (empty($fullName) || empty($email) || empty($contactPhone) || empty($message)) {
                emptyFieldsMessage();
            } else {
                // All fields are filled out, display submission message
                echo "<div class='submitted-form'>
                    <h2>Get in touch message:</h2>
                    <p class='appointment-field'><strong>Dear ".$fullName.", your form is submitted.</strong></p>
                </div>";
            }
        } else {
            echo "<p>No data submitted</p>";
        }
    ?>
</body>
</html>