<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Itim|Lobster|Montserrat:500|Noto+Serif|Nunito|Patrick+Hand|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab|Saira" rel="stylesheet">
    <link rel="stylesheet"  href="add_post.css">
    <title>Đăng bài</title>
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

<h1>Đăng bài</h1>
  <form class="post" action="add_post_process.php" method="post" id="posts">
    <label for="title">Tiêu đề:</label>
    <input type="text" id="title" name="title" required><br>

    <label for="username">Người đăng:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="content">Nội dung:</label>
    <textarea id="content" name="content" required></textarea>

    <input type="submit" name="submit" value="Đăng bài">
  </form>

  <footer>
    <p>&copy; 2023 BlogVn. All rights reserved.</p>
    <p>Contact:abcxyz@gmail.com</p>
</footer>
</body>
<script>
  document.getElementById('posts').addEventListener('submit', function(event) {
        //event.preventDefault();
    alert('Bài đăng đã được đăng thành công!');
});
</script>
</html>