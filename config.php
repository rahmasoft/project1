<?php
$conn=mysqli_connect('localhost','root','','depend');
if(!$conn){

    die("could not connect to the database:".mysqli_connect_errno());
}

?>