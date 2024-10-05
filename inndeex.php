<?php
require_once('auth.php');
require_once('MainClass.php');
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home | Login with OTP</title>
    <link rel="stylesheet" href="./Font-Awesome-master/css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./Font-Awesome-master/js/all.min.js"></script>
    <style>
        html,body{
            height:100%;
            width:100%;
            background-image:url('bg.jpeg');
            background-size:cover;
            background-repeat:no-repeat;
        }
        main{
            height:100%;
            display:flex;
            flex-flow:column;
        }
        #b{
            border-radius:10px;
        }

        

    </style>
</head>
<body>


    <main>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient" id="topNavBar">
        <div class="container">
            <a class="navbar-brand" href="#">
                Your Dashboard
            </a>
        </div>
    </nav>
    
    <div class="container py-3" id="page-container" >
        <div class="row justify-content-center" >
            <div class="col-lg-5 col-md-8 col-sm-12 col-xs-12"    >
                <div class="" style="box-shadow:2px 2px 5px #89c9f3, -2px -2px 5px #89c9f3;" >
                    <div class="card-body py-4" style="background-color:indianred;">
                        <h1 style="font-weight:700; font-style:italic;">Welcome <?= ucwords($_SESSION['firstname']) ?></h1>
                        <hr>
                        <p style="color:yellow; font-weight:450;">You are logged in using <?= $_SESSION['email'] ?></p>
                        <div class="clear-fix mb-4"></div>
                        <div class="text-end">
                            <a href="./logout.php" class="btn btn btn-secondary bg-gradient " id="b" style="color:black; font-weight:600;">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
</body>
</html>
<?php
require_once('auth.php');
require_once('MainClass.php');
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> To Do List</title>
    <link rel="stylesheet" href="./Font-Awesome-master/css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./Font-Awesome-master/js/all.min.js"></script>
    <style>
        html,body{
            height:100%;
            width:100%;
            background-image:url('bg.jpeg');
            background-size:cover;
            background-repeat:no-repeat;
        }
        main{
            height:100%;
            display:flex;
            flex-flow:column;
        }
        #b{
            border-radius:10px;
        }

        

    </style>
</head>
<body>


    <main>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient" id="topNavBar">
        <div class="container">
            <a class="navbar-brand" href="#">
                Your Dashboard
            </a>
        </div>
    </nav>
    
    <div class="container py-3" id="page-container" >
        <div class="row justify-content-center" >
            <div class="col-lg-5 col-md-8 col-sm-12 col-xs-12"    >
                <div class="" style="box-shadow:2px 2px 5px #89c9f3, -2px -2px 5px #89c9f3;" >
                    <div class="card-body py-4" style="background-color:indianred;">
                        <h1 style="font-weight:700; font-style:italic;">Welcome <?= ucwords($_SESSION['firstname']) ?></h1>
                        <hr>
                        <p style="color:yellow; font-weight:450;">You are logged in using <?= $_SESSION['email'] ?></p>
                        <div class="clear-fix mb-4"></div>
                        <div class="text-end">
                            <a href="./logout.php" class="btn btn btn-secondary bg-gradient " id="b" style="color:black; font-weight:600;">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
</body>
</html>