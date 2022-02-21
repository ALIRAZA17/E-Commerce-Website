<?php

include 'C:\xampp\htdocs\HTML & CSS\Partials\connection.php';

$ShowError="";
$ShowAlert=false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cname=$_POST['cname'];
    $city=$_POST['city'];
    $address=$_POST['address'];
    $age=$_POST['age'];
    $cno=$_POST['cno'];
    $gender=$_POST['gender'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    //To check if username is already present or not

    $unamesql="SELECT * FROM `customer` WHERE username='$username'";
    $result=mysqli_query($conn,$unamesql);
    $num=mysqli_num_rows($result);
    if ($num>0) {
        $ShowError="This username is already taken. Kindly try another one";
    }

    else {
        
        $existsql="SELECT * FROM `customer` where email='$email'";
        $result=mysqli_query($conn,$existsql);
        $num=mysqli_num_rows($result);
        if ($num>0) {
            $ShowError="This email is already registered";
        }

        else {

            if ($password==$cpassword) {
            $sql="INSERT INTO `customer` (`name`, `city`, `address`, `age`, `cno`, `gender`, `username`, `email`, `password`, `cpassword`, `date of reg`) VALUES ('$cname', '$city', '$address', '$age', '$cno', '$gender', '$username', '$email', '$password', '$cpassword', current_timestamp())";
            $result=mysqli_query($conn,$sql);
                if ($result) {
                    $ShowAlert=true;
                }
        }

                else 

                    {
                        $ShowError="You have entered a wrong password. Kindly Verify Again";
                    }

    }

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

        <?php
  include 'C:\xampp\htdocs\HTML & CSS\Partials\navbar.php';
  ?>

            <?php

  if ($ShowAlert) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> You have been registered successfully. Now you can log in.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }

  if ($ShowError) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Failure!</strong> '. $ShowError.'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
  ?>

                <div class="container my-4">
                    <form action="signup.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" required="required" class="form-control" id="cname" name="cname">
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="text" required="required" class="form-control" id="city" name="city">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" required="required" class="form-control" id="address" name="address">
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" required="required" class="form-control" id="age" name="age">
                        </div>
                        <div class="mb-3">
                            <label for="cno" class="form-label">Contact No</label>
                            <input type="text" required="required" class="form-control" id="cno" name="cno">
                        </div>
                        <div class="mb-3">
                            <label for="input-group-text" class="form-label">Gender</label>
                            <select name="gender" class="form-select form-select-md" aria-label=".form-select-sm example">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="pnts">Prefer Not to Say</option>
                </select>
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" required="required" class="form-control" id="username" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" required="required" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" required="required" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="cpassword" class="form-label">Confirm Password</label>
                            <input type="password" required="required" class="form-control" id="cpassword" name="cpassword">
                            <div id="passhelp" class="form-text">Please enter the same password</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>












                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>

    </html>