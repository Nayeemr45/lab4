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
        .forget_pass {
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
      <fieldset class="forget_pass">  
        <legend>FORGET PASSWORD</legend>
        <label for="">Enter Email:</label>
        <input type="text"  name="email" ><br><hr>
        <input type="submit" name="submit" value="Submit"><br>
</fieldset><br>
    <?php
    echo "<br><br>";
    include 'footer.php';
  ?>

  </fieldset>
</body>
</html>