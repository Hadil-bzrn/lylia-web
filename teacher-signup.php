<?php
$conn = new mysqli("localhost", "root", "", "elearning");

$name = $_POST['name'];
$surname = $_POST['surname'];
$year = $_POST['year'];
$module = $_POST['module'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO teachers (name, surname, year, module, username, password)
        VALUES ('$name','$surname','$year','$module','$username','$password')";

$conn->query($sql);

echo "Teacher registered successfully!";
?>
