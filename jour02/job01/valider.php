<?php

if ( isset ( $_GET["submit"])) {
    $mail = $_GET["email"];
    $password = $_GET["password"];

    echo "$mail , $password"; 
    
}
    
?>