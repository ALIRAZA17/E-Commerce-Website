<?php

include 'C:\xampp\htdocs\HTML & CSS\Partials\connection.php';
    $sql="SELECT username FROM `customer` WHERE email='taimoor@321gmail.com' and password='321'";
    $result=mysqli_query($conn,$sql);
    $mysql="SELECT username FROM `customer` WHERE email='taimoor@321gmail.com' and password='321'";
    $result2=mysqli_query($conn,$mysql);
    $row= mysqli_fetch_assoc($result2);
    echo var_dump($row['username'
    ]);
?>