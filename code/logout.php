<?php
session_start();

// Hủy tất cả các biến session
session_unset();

// Hủy session
session_destroy();

// Chuyển hướng người dùng về trang chủ hoặc trang đăng nhập
header("Location: login.php"); // Thay đổi index.php thành trang bạn muốn chuyển hướng
exit;
?>

