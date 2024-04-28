<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted form </title>
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body class="submitted-form">
    <?php
        include_once 'functions.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {       
            $patient_name = $_POST['patient_name'];
            $doctor_name = $_POST['doctor_name'];
            $department_name = $_POST['department_name'];
            $phone_number = $_POST['phone_number'];
            $symptoms = $_POST['symptoms'];
            $appointment_date = $_POST['appointment_date'];
            if (empty($patient_name) || empty($doctor_name) || empty($department_name) || empty($phone_number) || empty($symptoms) || empty($appointment_date)) {
                emptyFieldsMessage();
            } else {
                echo "<h2>Appointment Details</h2>";
                echo "<p class='appointment-field'><strong>Patient Name:</strong> $patient_name</p>";
                echo "<p class='appointment-field'><strong>Doctor's Name:</strong> $doctor_name</p>";
                echo "<p class='appointment-field'><strong>Department's Name:</strong> $department_name</p>";
                echo "<p class='appointment-field'><strong>Phone Number:</strong> $phone_number</p>";
                echo "<p class='appointment-field'><strong>Symptoms:</strong> $symptoms</p>";
                echo "<p class='appointment-field'><strong>Appointment Date:</strong> $appointment_date</p>";
                echo "<p class='appointment-field'><strong>YOUR APPOINTMENT IS BOOKED</p>";
            } 
        } else {
            echo "<p>No data submitted</p>";
        }
    ?>
</body>
</html>