<?php

if (isset($_POST["idNum"])) {
   
    
    $username = $_POST["idNum"];
    $pass = $_POST["pass"];

    require_once 'connection.php';
    require_once 'functions.php';

    adminLogin($conn, $username, $pass);
}
else {
    
}