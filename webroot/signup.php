<?php
    require_once'config/db.php';
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
        <form>
            <div class="mb-3">
                <label for="fist_name" class="form-label">Fist name</label>
                <input type="text" class="form-control" id="fist_name" aria-describedby="fist name">
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Last name</label>
                <input type="text" class="form-control" id="last_name" aria-describedby="last name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="confrim password" class="form-label">Confrim password</label>
                <input type="password" class="form-control" id="confrim password" name="confrim password">
            </div>
            <button type="submit" name="signup" class="btn btn-primary">Submit</button>
        </form>
        <a href="signin.php">signin</a>
    </div>
        
</body>
</html>