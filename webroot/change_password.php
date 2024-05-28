<?php
session_start();
include('config/db.php'); // ไฟล์นี้ควรมีการเชื่อมต่อฐานข้อมูล

// ตรวจสอบว่าผู้ใช้ได้ล็อกอินแล้วหรือไม่
if (!isset($_SESSION['userid'])) {
    $msg = "You must be logged in to change your password.";
    die();
}

// ตรวจสอบว่ามีการส่งแบบฟอร์มหรือไม่
if (isset($_POST['submit'])) {
    // รับข้อมูลจากแบบฟอร์ม
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // ตรวจสอบว่ารหัสผ่านใหม่ตรงกับยืนยันรหัสผ่านหรือไม่
    if ($new_password !== $confirm_password) {
        $msg = "New password and confirm password do not match.";
        die();
    }

    // รับ user_id จาก session
    $user_id = $_SESSION['userid'];

    // อัปเดตรหัสผ่านใหม่ในฐานข้อมูล
    
    $stmt = mysqli_query($conn, "UPDATE users SET password = '$new_password' WHERE id = '$user_id' ");
    if($stmt){
        header('Location: welcome.php');
    }
    else{
        echo "Error updating record: " . mysqli_error($conn);
    }

}
// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($conn);
?>
