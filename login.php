<?php
require_once('assets/includes/connection.php');
// get post data
$username = $_POST['username'];
$password = $_POST['password'];

//to prevent from mysqli injection  
$username = stripcslashes($username);
$password = stripcslashes($password);

// check if user exists in the database
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

// verify the password
if (password_verify($password, $user['password'])) {
    // login successful
    session_start();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    // redirect to dashboard
    header("Location: dashboard.php");
} else {
    // login failed
    echo "Invalid username or password";
}
?>