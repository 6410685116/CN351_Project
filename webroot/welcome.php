<?php 

    session_start();
    include('config/db.php');

    if (!isset($_SESSION['userid'])) {
        header("location: index.php");
    } else {
        if (isset($_SESSION['userid'])) {
            $uid = $_SESSION['userid'];
            $userQuery = "SELECT * FROM users WHERE id = '$uid'";
            $userResult = mysqli_query($conn, $userQuery);

            $data = mysqli_fetch_assoc($userResult);
        }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    

    <div class="container">
        <h1 class="display-4 mt-4">Welcome, <?php echo $data['firstname'] . " " . $data['lastname']; ?></h1>
        <hr>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, voluptas voluptatum eos sint reiciendis exercitationem explicabo iusto neque voluptates veritatis, omnis consequatur? Asperiores facilis officia cum reprehenderit nulla alias dolore!
        </p>
        <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        <?php if($data['userrole'] == 'admin'){ ?>
            <a href="view_user.php">Check user</a>
        <?php } ?>
        <!-- <form action="person2.php" method="get">
            <input type="hidden" name="name" value="1"> 
        </form> -->
        <a href="change_password_form.php">change password</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>

<?php } ?>