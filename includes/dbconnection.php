<?php

$conn = mysqli_connect('localhost','root','','eco');

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

?>