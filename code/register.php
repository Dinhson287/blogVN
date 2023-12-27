<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Đăng Ký</title>
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Itim|Lobster|Montserrat:500|Noto+Serif|Nunito|Patrick+Hand|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab|Saira" rel="stylesheet">
  <link rel="stylesheet"  href="register.css">
</head>
<body>
  <header>
  <div class="menu">
      
      <a href="mainpage.php"><img src="logo.png" alt="logo"></a>
      
      <h2><a href="mainpage.php">BlogVN</a></h2>
      <a href="login.php">Đăng nhập</a>
      <a href="register.php">Đăng ký</a>
      <a href="add_post.php">Đăng bài</a>
  </div>
  <h1>Đăng ký</h1>
  <main>
    
    <form action="register_process.php" method="post" id="register">
      <label for="username">Tên đăng nhập:</label>
      <input type="text" id="username" name="username" required><br>

      <label for="password">Mật khẩu:</label>
      <input type="password" id="password" name="password" required><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br>

      <label for="SDT">SĐT:</label>
      <input type="number" id="SDT" name="SDT" required><br>

      <input type="submit" value="Đăng ký"></a>
    </form>
  </main>
  <footer>
    <p>&copy; 2023 BlogVn. All rights reserved.</p>
    <p>Contact:abcxyz@gmail.com</p>
</footer>
  
</body>
<script>
  document.getElementById('register').addEventListener('submit', function(event) {
        //event.preventDefault();
    alert('Bạn đã đăng ký thành công!');
});
</script>
</html>