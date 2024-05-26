<?php
session_start();
include('config/db.php'); // ไฟล์นี้ควรมีการเชื่อมต่อฐานข้อมูล

// ตรวจสอบว่าผู้ใช้ได้ล็อกอินแล้วหรือไม่
if (!isset($_SESSION['userid'])) {
    die('You must be logged in to change your password.');
}

// ตรวจสอบว่ามีการส่งแบบฟอร์มหรือไม่
if (isset($_POST['submit'])) {
    // รับข้อมูลจากแบบฟอร์ม
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // ตรวจสอบว่ารหัสผ่านใหม่ตรงกับยืนยันรหัสผ่านหรือไม่
    if ($new_password !== $confirm_password) {
        die('New password and confirm password do not match.');
    }

    // รับ user_id จาก session
    $user_id = $_SESSION['userid'];

    // ดึงรหัสผ่านปัจจุบันจากฐานข้อมูล
    // $stmt = mysqli_query($conn, "SELECT password FROM users WHERE id = '$user_id'");
    // // mysqli_stmt_bind_param($stmt, 's', $user_id);
    // // mysqli_stmt_execute($stmt);
    // // mysqli_stmt_bind_result($stmt, $hashed_password);
    // mysqli_fetch_all($stmt);
    // // mysqli_stmt_close($stmt);

    // // ตรวจสอบว่ารหัสผ่านปัจจุบันตรงกันหรือไม่
    // if (!password_verify($current_password, $hashed_password)) {
    //     die('Current password is incorrect.');
    // }

    // แฮชรหัสผ่านใหม่
    // $new_password_hashed = password_hash($new_password, PASSWORD_DEFAULT);

    // อัปเดตรหัสผ่านใหม่ในฐานข้อมูล
    $stmt = mysqli_prepare($conn, 'UPDATE users SET password = ? WHERE id = ?');
    mysqli_stmt_bind_param($stmt, 'ss', $new_password, $user_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    echo 'Password changed successfully!';
}

// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($conn);
?>
