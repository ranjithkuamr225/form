<?php
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course_type = $_POST['course_type'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    // Display retrieved data (for debugging purposes)
    echo "<h1>Form Data Received</h1>";
    echo "<p><strong>Full Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Course Type:</strong> $course_type</p>";
    echo "<p><strong>Course:</strong> $course</p>";
    echo "<p><strong>Year of Study:</strong> $year</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";

    // Here you can add code to insert data into the database or process it further
} else {
    echo "No data submitted.";
}
?>
