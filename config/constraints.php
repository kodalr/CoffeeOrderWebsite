<?php

    session_start();
    define('SITEURL', 'http://localhost/coffee-order/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'coffee-order');
    $conn = mysqli_connect('LOCALHOST','root','') ;    
    $db_select = mysqli_select_db($conn,'coffee-order')  ;
    
?>
