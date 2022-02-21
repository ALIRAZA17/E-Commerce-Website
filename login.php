<?php

include 'C:\xampp\htdocs\HTML & CSS\Partials\connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM `customer` WHERE email='$email' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if ($num>0) {
        session_start();
        $mysql="SELECT username FROM `customer` WHERE email='$email' and password='$password'";
        $result2=mysqli_query($conn,$mysql);
        $row= mysqli_fetch_assoc($result2);
        $username=$row['username'];
        $_SESSION['logged_in']=true;
        $_SESSION['username']=$username;
        header("Location: ./User/home_of_users.php");
    }

    else {
        echo"Cannot Log in";
    }

}

?>


    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Sign Up</title>
    </head>

    <body>

        <?php include 'C:\xampp\htdocs\HTML & CSS\Partials\navbar.php'; ?>

        <div class="container my-4">
            <form method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" required="required" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" required="required" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>

    </html>