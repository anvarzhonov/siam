<?php

$con = new mysqli('db','user', 'password','store_db');

if (!$con){
    die(mysqli_error($con));
}

?>

