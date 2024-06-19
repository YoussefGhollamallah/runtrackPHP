<?php

$countvisit = 1;

if(isset($_COOKIE['countvisit']))
{
    $countvisit = $_COOKIE['countvisit'];
    $countvisit ++; 
}

setcookie('countvisit', $countvisit);       
echo "You have visited ".$countvisit." times";
?>