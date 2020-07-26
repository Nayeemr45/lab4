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
    </style>
</head>
<body>
  <fieldset class="main">
  <?php
    include 'header.php';
    echo "<br><hr><br>";
  ?>
<div class="registration">
       <fieldset>  
      <legend>REGISTRATION</legend>
        <div class="reg">
        <label for="">Name:</label>
        <input type="text" name="name"><br><hr>
        <label for="">Email:</label>
        <input type="text" name="email"><br><hr>
        <label for="">User Name:</label>
        <input type="text" name="user_name"><br><hr>
        <label for="">Password:</label>
        <input type="text" name="pass"><br><hr>
        <label for="">Confirm Password:</label>
        <input type="text" name="con_pass"><br><hr>
        </div>

        <div class="gender_style">
       <fieldset>  

        <legend>GENDER</legend>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="other">Other
        <br>
        <br>
        </fieldset>
        </div><hr>
       <div class="db_style">
       <fieldset>  
      <legend>DATE OF BIRTH</legend>
      <input type="text"  name="day" size="3"><label for=""><span style="padding-left:5px;">/</span></label>
      <input type="text" name="month" size="3"><label for=""><span style="padding-left:5px;">/</span></label>
      <input type="text"  name="year" size="3">
      <label for=""><span style="padding-left:20px">(dd/mm/yyyy)</span></label>

      </fieldset>
       </div><hr>
       <input type="submit" value="Submit">
      <input type="submit" value="Reset"><br><br>
</fieldset><br><br>
</div>

<?php
    echo "<br><br>";
    include 'footer.php';
  ?>

  </fieldset>
</body>
</html>