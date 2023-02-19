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
require_once('config.php');
?>
<?php

if (isset($_POST)) {

	$firstname 		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
	$email 			= $_POST['email'];
	$phonenumber	= $_POST['phonenumber'];
	$password 		= hash('sha256', $_POST['password']);

	//$password = hash('sha256', $_POST['password']);

	$sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password ) VALUES(?,?,?,?,?)";
	$stmtinsert = $db->prepare($sql);
	$result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password]);
	if ($result) {
		echo "Please check your email [" . $email . "] to verify your account - it's easy and only takes a few seconds! ";
	} else {
		echo 'There were erros while saving the data.';
	}
} else {
	echo 'No data';
}
