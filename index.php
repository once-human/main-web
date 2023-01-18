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
if (!$_SESSION['logged_in']) {
    header("Location:login.php"); 
    exit();
}

require_once("assets/init.php");

?>

<!DOCTYPE html>

<body>
    <h1><?php echo $title; ?></h1>
    <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
    <a href="/atmos/logout.php">Logout</a>
</body>

</html>