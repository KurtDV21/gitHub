<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/praktis.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header>
    <img src="otw.png" alt="logo" class="logo">

    <nav class="nav-container">
      <ul class="nav-link">
       <li><a href="#">Home</a></li>
       <li><a href="#">Menu</a></li>
       <li><a href="#">Order</a></li>
       <li><a href="#">Services</a></li>
       
       <button class="button-popup">Log-in</button>
      </ul>
    </nav>
</header>

<!-- Background overlay for closing the popup -->


<div id="id01" class="wrapper">
    <span class="icon-close"><ion-icon name="close"></ion-icon></span>
    <div class="form-box login">
      <h2>Login</h2>
      <form action="../process/log_in.php">
        <div class="input-box">
          <span class="icon"><ion-icon name="people"></ion-icon></span>
          <input type="text" name="username" required>
          <label for="#">Username</label>
        </div>

        <div class="input-box">
          <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
          <input type="text" name="password" required>
          <label for="#">Password</label>
        </div>

        <div class="forgot">
          <label><input type="checkbox">Remember me</label>
          <a href="#">Forgot Password?</a>
        </div>
        <button type="submit" class="btn">Login</button>

        <div class="login-register">
          <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
        </div>
      </form>
    </div>

    <div class="form-box register">
      <h2>Register</h2>
      <form action="../process/register.php">

      <div class="input-box">
          <span class="icon"><ion-icon name="people"></ion-icon></span>
          <input type="text" name="username" required>
          <label for="#">Username</label>
        </div>

        <div class="input-box">
          <span class="icon"><ion-icon name="people"></ion-icon></span>
          <input type="email" >
          <label for="#">Email</label>
        </div>

        <div class="input-box">
          <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
          <input type="password" name="password" required>
          <label for="#">Password</label>
        </div>

        <div class="forgot">
          <label><input type="checkbox">I agree to the terms & conditions</label>
        </div>
        <button type="submit" class="btn">Register</button>

        <div class="login-register">
          <p>Already have an account?<a href="#" class="login-link">Login</a></p>
        </div>
      </form>
    </div>
</div>
<div class="overlay"></div>

<script src="../js/practice.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
