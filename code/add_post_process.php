<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Itim|Lobster|Montserrat:500|Noto+Serif|Nunito|Patrick+Hand|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab|Saira" rel="stylesheet">
    <title>Đăng bài thành công</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

    body {
    font-family: 'Itim', cursive;
    line-height: 1.6;
    background-color: #f4f4f4;
    padding: 20px;
    background-image: url('colorful-2468874_1920.jpg');
    background-size: cover; 
    background-repeat: no-repeat; /* Ngăn lặp lại ảnh nền */
    
    background-color: #f4f4f4; /* Màu nền phụ */
    }
    h1{
    font-size: 40px;   
    margin-top: 20px;
    text-align: center;
    padding-bottom: 150px;
    text-shadow: -0.5px -0.5px 0 #ffffff,  
                  0.5px -0.5px 0 #ffffff,
                 -0.5px  0.5px 0 #ffffff,
                 0.5px  0.5px 0 #ffffff;
    }
    a{
        text-decoration:none;
    }
    </style>
</head>
<body>
    <?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'connect.php'; // Kết nối đến CSDL

    $title = $_POST['title'];
    $content = $_POST['content'];
    $username = $_POST['username'];

    $sql = "SELECT user_name FROM users WHERE user_name = '$username'";
    $result =  $conn->query($sql);
    if($result->num_rows == 0){
        echo "Bạn phải dùng chính tên đăng nhập của bạn để đăng bài.Vui lòng kiểm tra lại.<a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    // Thực hiện truy vấn để chèn bài đăng mới vào bảng 'posts'
    $sql = "INSERT INTO posts (title, content,user_name) VALUES ('$title', '$content','$username')";
    $conn->query($sql);   
    $conn->close();
}
?>
<h1>Bạn đã đăng bài thành công</h1>
<h1>Trở trang chủ <a href="mainpage.php">Trang chủ</a></h1>
</body>
</html>
