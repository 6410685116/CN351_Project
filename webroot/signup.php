<?php

    session_start();

    include('config/db.php');

    if (isset($_POST['signup'])) {
        // $first_name = mysqli_real_escape_string($conn, $_POST['fistname']);
        // $last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
        // $email = mysqli_real_escape_string($conn, $_POST['email']);
        // $password = mysqli_real_escape_string($conn, $_POST['password']);
        // $con_pass = mysqli_real_escape_string($conn, $_POST['confrimpassword']);
        $first_name =  $_POST['fistname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $con_pass =  $_POST['confrimpassword'];
        if($password == $con_pass){
            $sql = "INSERT INTO users(firstname, lastname, email, password, userrole) VALUES('$first_name', '$last_name', '$email', '$password', 'user')";
            if (mysqli_query($conn, $sql)) {
                echo "Created account. Please login";
                $msg = "";
            } else {
                $msg = "";
            }
        } else {
            echo "Password and confirm password do not match.";
        }
        // $name = htmlspecialchars($name);
    
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Sign Up</h2>
        <hr>
        <form method="post">
            <div class="mb-3">
                <label for="fistname" class="form-label">Fist name</label>
                <input type="text" class="form-control" name="fistname" aria-describedby="fistname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last name</label>
                <input type="text" class="form-control" name="lastname"  aria-describedby="lastname">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control"  name="email"  aria-describedby="email">
            </div> 
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label for="confrimpassword" class="form-label">Confrim password</label>
                <input type="password" class="form-control" id="confrimpassword" name="confrimpassword">
            </div>
            <button type="submit" name="signup" class="btn btn-primary">Submit</button>
        </form>
        <a href="/">signin</a>
    </div>
        
</body>
</html>