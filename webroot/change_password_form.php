<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Change Password</title>
    
</head>
<body>
    <div class="container">
        <h2 class="mt-4 center">Sign Up</h2>
        <hr>
        <form action="change_password.php" method="POST">

            <!-- <label for="current_password">Current Password:</label>
            <input type="password" id="current_password" name="current_password" required><br> -->
            <div class="mb-3">
                <label for="new_password" class="form-label">New Password:</label>
                <input type="password" id="new_password" name="new_password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm New Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
            </div>
            <input type="submit" name="submit" value="Change Password" class="btn btn-success">
            <a href="/welcome.php" class="btn btn-primary">Home</a>
        </form>
        
    </div>
</body>
</html>
