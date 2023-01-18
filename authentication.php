<?php
require_once('assets/includes/connection.php');
// get post data
$username = $_POST['username'];
$password = $_POST['password'];

//to prevent from mysqli injection  
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// check if user exists in the database & pass verification
$sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

//Login Successfull
if ($count == 1) {
    session_start();
    $_SESSION['logged_in'] = TRUE;
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    // redirect to dashboard
    header("Location: index.php");
} else {
    // login failed
    echo "Invalid username or password";
}
