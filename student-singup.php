<?php
$conn = new mysqli("localhost", "root", "", "elearning");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$surname = $_POST['surname'];
$year = $_POST['year'];
$section = $_POST['section'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO students (name, surname, year, section, username, password)
        VALUES ('$name','$surname','$year','$section','$username','$password')";

$conn->query($sql);

echo "Student registered successfully!";
?>
