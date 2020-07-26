<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        legend{
        font-weight:600;
    }
        .main {
  margin-right: 650px;
    margin-left: 50px;
    margin-top:30px;
}
        .login {
  margin-right: 450px;
    margin-left: 50px;
    margin-top:30px;
}

    </style>
</head>
<body>
<fieldset class="main">
  <?php
    include 'header.php';
    echo "<br><hr><br>";
  ?>
      <fieldset class="login">  
        <legend>LOGIN</legend>
        <label for="">User Name:</label>
        <input type="text"  name="name" ><br><br>
        <label for="">Password:</label>
        <input type="text"  name="password" ><br><hr>
        <input type="checkbox" name="remember_me" value="remember_me">Remember Me <br>
        <a href="logged_in.php"><input type="submit" name="submit" value="Submit"></a>
        <a href="forget_password.php">Forgot Password?</a><br>
</fieldset><br><br>
    <?php
    echo "<br><br>";
    include 'footer.php';
  ?>

  </fieldset>
</body>
</html>