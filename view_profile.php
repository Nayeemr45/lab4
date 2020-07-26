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
        .left2{
            float:left;
        }
        .right2{
            float:right;
            margin-top: 6.5px;
            margin-left: 5px;
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
        <legend>Profile</legend>
        <div class="left2">
        <label for="">Name:</label>
        <label for="">Bob</label><br><hr>
        <label for="">Email:</label>
        <label for="">bob@aiub.edu</label><br><hr>
        <label for="">Gender:</label>
        <label for="">Male</label><br><hr>
        <label for="">Date of Birth:</label>
        <label for="">19.09.1998</label><br><hr>
        <a href="">Edit Profile</a>
        </div>
        <div class="right2">
        <img src="profile_pic.PNG" alt=""><br><hr>
        <a href="change-profile_picture.php">Change</a><br>
        </div>
        </fieldset>
        </div>
    </div>
    </fieldset>
</body>
</html>