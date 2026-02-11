<?php
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Here you can save to a database (dummy example for now)
    $message = "Account created successfully! <a href='login.php'>Login now</a>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - E-Learning</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-container">
    <h2>Sign Up</h2>
    <form method="post" action="">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <input type="submit" value="Sign Up">
    </form>
    <p style="color:green;"><?php echo $message; ?></p>
    <p>Already have an account? <a href="login.php">Login</a></p>
</div>
</body>
</html>
