<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Doctor's Login</title>
<style>
  img.Bg{
      background-attachment: fixed;
      position: absolute;
      left: 0px;
      top: 0px;
      z-index: -1;
      width: 100%;
      height: 100%;
      filter: blur(5px);
  }
  body {
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .login-container {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
    width: 300px;
    opacity: 80%;
    margin-left: 37%;
  }

  h2 {
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
    padding-right: -20px;
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
  <img class="Bg" src="DoctorLogin3.jpg">
  <h1 class="h1">DOCTOR LOGIN</h1>
  <br><br><br><br>
  <div class="login-container">
      <h2>Doctor's Login</h2>

    <form id="login-form" method="post" action="doctorlogin.php">
      <div class="input-group">
        <label for="id">Id</label>
        <input type="number" id="id" name="id" required>
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
