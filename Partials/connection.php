<?php

$servername="localhost";
$username="root";
$password="";
$database="imobile";

$conn=mysqli_connect($servername,$username,$password,$database);

if (!$conn) {
    die("Failure connecting due to ". mysqli_connect_error());
}
?>