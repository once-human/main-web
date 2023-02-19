<!-- 
// +------------------------------------------------------------------------+
// | @author Onkar Yaglewad
// | @author_url: https://atmosapp.in/team/yaglewad-onkar
// | @author_email: onkar@atmosapp.in
// +------------------------------------------------------------------------+
// | @author_s -----------------
// | @author_s_url: ------------------------------------
// | @author_s_email: ------------------
// +------------------------------------------------------------------------+
// | Atmos - Immersive Social Community Platform
// | Copyright (©) 2021-23 Atmos | All rights reserved.
// +------------------------------------------------------------------------+
-->

<?php
session_start();
require_once('config.php');

$username = $_POST['username'];
$password = hash('sha256', $_POST['password']);

$sql = "SELECT * FROM users WHERE email = ? AND password = ? LIMIT 1";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([$username, $password]);

if ($result) {
    $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
    if ($stmtselect->rowCount() > 0) {
        $_SESSION['userlogin'] = $user;
        echo 'Login Successful !';
    } else {
        $sql = "SELECT * FROM users WHERE email = ? LIMIT 1";
        $stmtselect = $db->prepare($sql);
        $stmtselect->execute([$username]);
        if ($stmtselect->rowCount() > 0) {
            echo 'Sorry, Wrong Password';
        } else {
            echo 'No User found associated with this email address';
        }
    }
} else {
    echo 'There were errors while connecting to database.';
}
