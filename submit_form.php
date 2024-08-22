<?php
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = "";     // Default password is empty
$dbname = "student_db1"; // Name of the database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$course_type = $_POST['course_type'];
$course = $_POST['course']; // Will be either B.Tech or Degree course
$year = $_POST['year'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];

// Insert data into the database
$sql = "INSERT INTO students (name, email, course_type, course, year, dob, gender)
        VALUES ('$name', '$email', '$course_type', '$course', '$year', '$dob', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
