<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <form action="view_user.php" method="post" class="container mt-3">

        <h1 class="display-4">Welcome</h1>

        <div class="mb-3">
            <label for="id">ID : </label>
            <input type="text" name="id" id="id" required>
        </div>
        <input type="hidden" name="idCheck" value="1">
        <input type="submit" class="btn btn-primary">
        <input type="reset" class="btn btn-warning">
    </form>
    <?php 
        if ( isset($_POST['idCheck'])){
            $sever = 'mariadb';
            $username = 'root';
            $password = 'secret';
            $database = 'registration';

            function db_connect($sever, $username, $password, $database)
            {
                $link = mysqli_connect($sever, $username, $password, $database);
                if ( ! $link){
                    die("Connection failed: " . mysqli_connect_error());
                }
                return $link;
            }
            $link = db_connect($sever, $username, $password, $database);
            
            $id = $_POST['id'];
            echo $id . "<br>";

            $query = "select id, firstname, email from users where id = '" . $id . "'";// where id = " . $id;
            $sql = mysqli_query($link, $query);
            if (mysqli_num_rows($sql) != 0) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    echo $row['id'] . ", ";
                    echo $row['firstname'] . ", ";
                    echo $row['email'] . "<br>";
                }
            } else {
                echo "0 result";
            }
            

            $link->close();
        } 
    ?>
</body>
</html>
