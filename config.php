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

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "linterex_main";

$db = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);