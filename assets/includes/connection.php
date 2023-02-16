<?php      
    $db_host = "localhost";  
    $db_user = "root";  
    $db_password = '';  
    $db_name = "atmos";  
      
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  