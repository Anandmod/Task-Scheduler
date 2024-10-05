<?php
require_once('auth.php');
require_once('MainClass.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport" 
          content="width=device-width, 
                   initial-scale=1.0">
    <title>to do list</title>
    <style>
        body {
  background-color: var(--background-color4);
  max-width: 100%;
  overflow-x: hidden;
  
}
.dp {
  height: 40px;
  width: 40px;
  background-color: #626262;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}
.dpicn {
  height: 42px;
}
    </style>
</head>
<body>
    <div style="width:40%; height:50%; margin-left:30%; margin-top:100px; background-color:aliceblue;  box-shadow:2px 2px 5px indianred, -2px -2px 5px indianred;">
<div class="dp" style=" margin-left:250px;">
              <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
                    class="dpicn" 
                    style=""alt="dp">
              </div>
              <h1 style="font-weight:700; font-style:cursive; color:black; margin-left:15px;">Name- <?= ucwords($_SESSION['firstname']) ?></h1>
              <h1 style="font-weight:700; font-style:cursive; color:black; margin-left:15px;">Email- <?= ucwords($_SESSION['email']) ?></h1>
              <h1 style="font-weight:700; font-style:cursive; color:black; margin-left:15px;">Mobile- <?= ucwords($_SESSION['middlename']) ?></h1>
              <h1 style="font-weight:700; font-style:cursive; color:black; margin-left:15px;">Gender- <?= ucwords($_SESSION['lastname']) ?></h1>
</br>

</div>
</body>
</html>