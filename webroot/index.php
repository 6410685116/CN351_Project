<?php 

    session_start();

    include('config/db.php');

    if (isset($_SESSION['userid'])) {
    header("Location: welcome.php");
    exit();
}

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email ='$email' AND password ='$password'");


        $row = mysqli_fetch_array($sql);

        if ($row) {
            $_SESSION['userid'] = $row['id'];
            $_SESSION['email'] = $row['email'];

            if (!empty($_POST['remember'])) {
                setcookie('user_login', $_POST['email'], time() + (10 * 365 * 24 * 60 * 60));
                setcookie('user_password', $_POST['password'], time() + (10 * 365 * 24 * 60 * 60));
            } else {
                if (isset($_COOKIE['user_login'])) {
                    setcookie('user_login', '');

                    if (isset($_COOKIE['user_password'])) {
                        setcookie('user_password', '');
                    }
                }
            }
            header("location: welcome.php");
        } else {
            $msg = "Invalid Login";
        }
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
        <h2 class="mt-4">Sign In</h2>
        <hr>
        <form method="post">
            <?php if(isset($msg)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $msg; ?>
            </div>
            <?php } ?>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" value="<?php if (isset($_COOKIE['user_login'])) { echo $_COOKIE['user_login']; } ?>" name="email" id="email" aria-describedby="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" value="<?php if (isset($_COOKIE['user_password'])) { echo $_COOKIE['user_password']; } ?>" name="password" id="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="remember" <?php if (isset($_COOKIE['user_login'])) { ?> checked <?php } ?> class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">Remember Me</label>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </form>
        <div style="margin-top: 10px;">
            <a href="signup.php" class="btn btn-primary">Sign Up</a>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>   
</body>
</html>