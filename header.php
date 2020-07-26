<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .header{
  display: grid;
  grid-template-rows:1fr;
}
.header .left{
  display: grid;
  grid-row:1/2;
  justify-content: start;
}
.header .right{
  display: grid;
  grid-row:1/2;
  justify-content: end;


}
.header .right ul{
  display: grid;
  grid-auto-flow: column;
  padding-top: -20px;
  margin-left:300px;
}
.header .right ul li{
  margin-right: 5px;
  list-style:none;
}
    </style>
</head>
<body>
    <div class="header">  
            <div class="left">
                <img src="logo.PNG" alt="LOGO">
            </div>
            <div class="right">
                <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">|</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="#">|</a></li>
                <li><a href="registration.php">Registration</a></li>
                </ul>
            </div>
            </div>
</body>
</html>