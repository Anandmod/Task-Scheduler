<?php
require_once('auth.php');
require_once('MainClass.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $login = json_decode($class->login());
    if($login->status == 'success'){
        echo "<script>location.replace('./login_verification.php');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="./Font-Awesome-master/css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./Font-Awesome-master/js/all.min.js"></script>
    <script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
    <style>
        html,body{
            height:100%;
            width:100%;
            background-image:url('bg.jpeg');
            background-size:cover;
            background-repeat:no-repeat;
        }
        main{
            height:calc(100%);
            width:calc(100%);
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
        }
        #k{
            border-radius:10px;
        }
    </style>
</head>
<body class="">
    <main>
       <div class="col-lg-7 col-md-9 col-sm-12 col-xs-12 mb-4">
           <h1 class="text-light text-center"></h1>
        </div>
       <div class="col-lg-3 col-md-8 col-sm-12 col-xs-12" style="box-shadow:2px 2px 5px #89c9f3, -2px -2px 5px #89c9f3;">
           <div class="card shadow rounded-0" style="color:white;">
               <div class="card-header py-1" style="background-color:black;">
                   <h2 class="card-title text-center">LOGIN</h2>
               </div>
               <div class="card-body py-4" style="background-color:indianred;">
                   <div class="container-fluid">
                       <form action="./login.php" method="POST">
                       <?php 
                            if(isset($_SESSION['flashdata'])):
                        ?>
                        <div class="dynamic_alert alert alert-<?php echo $_SESSION['flashdata']['type'] ?> my-2 rounded-0">
                            <div class="d-flex align-items-center">
                                <div class="col-11"><?php echo $_SESSION['flashdata']['msg'] ?></div>
                                <div class="col-1 text-end">
                                    <div class="float-end"><a href="javascript:void(0)" class="text-dark text-decoration-none" onclick="$(this).closest('.dynamic_alert').hide('slow').remove()">x</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php unset($_SESSION['flashdata']) ?>
                        <?php endif; ?>
                           <div class="form-group" style="">
                               <label for="email" class="label-control" style="font-size:20px; font-weight:600;">Email</label>
                               <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="Enter Your Email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" autofocus required>
                            </div>
                           <div class="form-group">
                               <label for="password" class="label-control" style="font-size:20px; font-weight:600;">Password</label>
                               <input type="password" name="password" id="password" class="form-control rounded-0" placeholder="Enter Your Passwaord" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>" required>
                               <input type="checkbox" onclick="myFunction()" style="margin-top:2px;"><label style="font-weight:bold; margin-left:2px; color:firebrick;">Show Password</label>
                            </div>
                            <div class="clear-fix mb-4"></div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary bg-gradient " id="k" style="color:black; font-weight:700;">LOGIN</button>
                            </div>
                                <h5 style="color:yellow;">Don't have account<a href="registration.php" style="text-decoration:none; color:blue;"> Sign Up</a></h5>
                       </form>
                   </div>
               </div>
           </div>
       </div>
    </main>
</body>
</html>