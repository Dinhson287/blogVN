<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Itim|Lobster|Montserrat:500|Noto+Serif|Nunito|Patrick+Hand|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab|Saira" rel="stylesheet">
  <link rel="stylesheet"  href="style.css">
  <title>Trang Chủ</title>
  
</head>
<body>
    <div class="menu">
      
      <a href="mainpage.php"><img src="logo.png" alt="logo"></a>
      
      <h2><a href="mainpage.php">BlogVN</a></h2>
      <?php
          session_start();
          if (isset($_SESSION['username'])) {
              echo '<p>' . $_SESSION['username'] . '</p>&nbsp;&nbsp;&nbsp;&nbsp;';
              echo '<a href="logout.php">Đăng xuất</a>';
              
          } else {
              echo '<a href="login.php">Đăng nhập</a>';
              echo '<a href="register.php">Đăng ký</a>';
          }
      ?>

      <!-- <a href="login.php">Đăng nhập</a>
      <a href="register.php">Đăng ký</a> -->
      <a href="add_post.php">Đăng bài</a>
    </div>
    
  <h1>Trang Chủ</h1>
  <main>
    <!-- Hiển thị danh sách bài đăng từ cơ sở dữ liệu -->
    <?php
    require 'connect.php';

    $sql = "SELECT * FROM posts";
    $result =  $conn->query($sql);
    while ($row = mysqli_fetch_array($result)) {
      echo "<div class='post'>";
      echo "<h2>" . $row['title'] . "</h2>";
      echo "<h4>Tác giả:  </h4> <h4>" . $row['user_name']."</h2>";
      echo "<p>" . $row['content'] . "</p>";
      echo "</div>";
    }
    ?>
  </main>
  <footer>
    <p>&copy; 2023 BlogVn. All rights reserved.</p>
    <p>Contact:abcxyz@gmail.com</p>
</footer>

</body>
</html>