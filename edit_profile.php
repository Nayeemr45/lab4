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
                margin-right: 702PX;
    margin-left: 50px;
    margin-top:30px;
}
.main2{
    display:grid;
    grid-template-columns: 0.2fr,1fr;
    grid-template-rows: 1fr;
    margin-top: -16px;

}
        .left{
            display: grid;
            grid-row:1/2;
            grid-column:1/2;
            justify-content: start;
        }
        .right{
            display: grid;
            grid-row:1/2;
            grid-column:2/3;
            justify-content: start;
            margin-left: 0px;
        }
        
.right  label{
  text-align: right;

}
.reg input{
  float:right;
  margin-left:-20px;
}

    </style>
</head>
<body>
<fieldset class="main">

  <?php
    include 'header2.php';
    echo "<br><hr><br>";
    ?>

    <div class="main2">  
        <div class="left">
        <?php
            include 'sidebar.php';
        ?>
        </div>
        <div class="right">
        <fieldset>  
      <legend>EDIT PROFILE</legend>
        <div class="reg">
        <label for="">Name :</label>
        <input type="text" name="name"><br><hr>
        <label for="">Email :</label>
        <input type="text" name="email"><br><hr>
        </div>

        <div class="gender_style">

        <label>Gender :</label>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="other">Other
        <br>
        <br>
        </div><hr>
       <div class="db_style">
      <label>Date of Birth :</label>
      <input type="text"  name="day"><br>
      <label for=""><span style="padding-left:20px">(dd/mm/yyyy)</span></label><br><hr>
        </div>
        <input type="submit" value="Submit">

    </div>
    </fieldset>
</body>
</html>