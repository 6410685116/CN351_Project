<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
</head>
<body>
    <form action="change_password.php" method="POST">

        <!-- <label for="current_password">Current Password:</label>
        <input type="password" id="current_password" name="current_password" required><br> -->

        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required><br>

        <label for="confirm_password">Confirm New Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br>

        <input type="submit" name="submit" value="Change Password">
    </form>
</body>
</html>
