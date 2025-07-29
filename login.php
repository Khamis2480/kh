<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="#" method="post">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

      <div class="remember-me">
        <input type="checkbox" id="remember" name="remember">
        <label for="remember">Remember me</label>
      </div>

      <button type="submit">Login</button>

      <div class="links">
        <a href="#">Forgot Password?</a>
        <span>|</span>
        <a href="#">Create Account</a>
        <span>|</span>
        <a href="index.php">Home Page</a>
      </div>
    </form>
  </div>
</body>
</html>