<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hospital Admin Login</title>
<style>
  body {
    background-image: url(AdminLogin.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .container {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
    width: 300px;
    opacity: 80%;
    margin-left: 37%;
  }

  h2{
    text-align: center;
    margin-bottom: 20px;
    color: #333;
  }

  .input-group {
    margin-bottom: 15px;
    padding-right: 20px;
    border-radius: 3px;
  }

  .input-group label {
    display: block;
    margin-bottom: 5px;
    color: #555;
  }

  .input-group input {
    width: 100%;
    padding: 10px;
    margin-right: 40%;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .login-btn {
    width: 100%;
    background-color: lightseagreen;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
  }

  .login-btn:hover {
    background-color: #0056b3;
  }
  h1 {
    background-color: lightseagreen;
    color: #fff;
    text-align: center;
    padding: 10px;
    margin-left: 8px;
    margin-right: 8px;
    border-radius: 8px;
  }
</style>
</head>
<body>
  <h1 class="h1">ADMIN LOGIN</h1>
  <br><br><br><br>
  <div class="container">
      <h2>Hospital Admin Login</h2>

    <form id="login-form" action="adminlogin.php" method="post">

      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>

      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <?php
            if (isset($_GET['error']) && $_GET['error'] == 1) {
                echo '<div style="color: red;">' . $_GET['message'] . '</div>';
            }
            ?>

      <button class="login-btn" type="submit">Login</button>
    </form>

  </div>

</body>
</html>
