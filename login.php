<?php
session_start();
$conn = new mysqli("localhost", "root", "", "elearning");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_student = "SELECT * FROM students WHERE username='$username' AND password='$password'";
    $sql_teacher = "SELECT * FROM teachers WHERE username='$username' AND password='$password'";

    $result_student = $conn->query($sql_student);
    $result_teacher = $conn->query($sql_teacher);

    if ($result_student->num_rows > 0 || $result_teacher->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("Location: courses.php");
        exit();
    } else {
        echo "Invalid login credentials";
    }
}
?>

