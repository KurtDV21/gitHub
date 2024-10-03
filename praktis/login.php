<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<header>
  <nav class="navbar">
    <img src="logo1.png" alt="logo" class="logo">

    <div class="nav-container"> <!-- New div to contain nav links -->
      <ul class="nav-link">
        <li><a href="#home">HOME</a></li>
        <li><a href="">OUR CATS</a></li>
        <li><a href="">ABOUT</a></li>
        <li><a href="">FAQs</a></li>

      
      </ul>
      <button class="login-btn"> <a href="login.php">Login</a></button>
    </div>
  </nav>
</header>


<div class="wrapper">
    <span class="icon-close"><ion-icon name="close"></ion-icon></span>
    <div class="form-box login">
      <h2>Login</h2>
      <form action="#">
        <div class="input-box">
          <span class="icon"><ion-icon name="people"></ion-icon></span>
          <input type="user" required>
          <label for="#">Username</label>
        </div>

        <div class="input-box">
          <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
          <input type="password" required>
          <label for="#">Password</label>
        </div>

        <div class="remember-forgot">
          <label><a href="admin-login.php" class="admin-account"><b>ADMIN ACCOUNT</b></a></label>
          <a href="#" class="forgot"><b>FORGOT PASSWORD?</b></a>
        </div>
        <button type="submit" class="btn"><b>Login</b></button>

        <div class="login-register">
          <p >Don't have an account? <a href="register-form.php" class="register-link"><b>Register</b></a></p>
        </div>
      </form>
    </div>



    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>