<?php
require_once('auth.php');
require_once('MainClass.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $register = json_decode($class->register());
    if($register->status == 'success'){
        $_SESSION['flashdata']['type']='success';
        $_SESSION['flashdata']['msg'] = ' Account has been registered successfully.';
        echo "<script>location.href = './login_verification.php';</script>";
        exit;
    }else{
        echo "<script>console.error(".json_encode($register).");</script>";
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
  var x = document.getElementById("psw");
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
            background-repeat:no-repeat;
            background-size:cover;
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

        #message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

        #message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
    </style>
</head>
<body class="">
    <main>
       <div class="col-lg-7 col-md-9 col-sm-12 col-xs-12 mb-4">
           <h1 class="text-light text-center"></h1>
        </div>
       <div class="col-lg-3 col-md-8 col-sm-12 col-xs-12"  style="box-shadow:2px 2px 5px #89c9f3, -2px -2px 5px #89c9f3;">
           <div class="card shadow rounded-0"  style="color:white;">
               <div class="card-header py-1" style="background-color:black;" >
                   <h2 class="card-title text-center">Create an Account</h2>
               </div>
               <div class="card-body py-4" style="background-color:indianred;">
                   <div class="container-fluid" >
                       <form action="./registration.php" method="POST">
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
                            <div class="form-group">
                               <label for="firstname" class="label-control" style="font-size:20px; font-weight:600;">Name</label>
                               <input type="text" pattern="[A-Za-z]{3,20}" maxlength="20" name="firstname" id="firstname" class="form-control rounded-0" placeholder="Enter Your Name"value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>" autofocus required>
                            </div>
                            <div class="form-group">
                               <label for="email" class="label-control" style="font-size:20px; font-weight:600;">Email</label>
                               <input type="email" name="email" id="email" class="form-control rounded-0" pattern=".+@gmail\.com" size="30" placeholder="abc@gmail.com"value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" required>
                            </div>
                            <div class="form-group">
                               <label for="middlename" class="label-control" style="font-size:20px; font-weight:600;">Mobile Number</label>
                               <input type="text" maxlength="10" pattern="[1-9]{1}[0-9]{9}" name="middlename" id="middlename" class="form-control rounded-0" placeholder="Enter 10 Digit Only"value="<?= isset($_POST['middlename']) ? $_POST['middlename'] : '' ?>" required>
                            </div>
                            
                            <div class="form-group">
                               <label for="lastname" class="label-control" style="font-size:20px; font-weight:600;">Gender</label>
                               <select name="lastname" id="lastname" class="form-control rounded-0" placeholder="" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>" required>
                        
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="other">Other</option>
                              </select>
                            </div>
                            
                           <div class="form-group">
                               <label for="password" class="label-control" style="font-size:20px; font-weight:600;">Password</label>
                               <input type="password" name="password" id="psw" class="form-control rounded-0" placeholder="Enter Your Passward"value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>" required>
                               <input type="checkbox" onclick="myFunction()" style="margin-top:2px;"><label style="font-weight:bold; margin-left:2px; color:firebrick;">Show Password</label>
                               <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
 
                              </div>
                              <script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
                            <div class="clear-fix mb-4"></div>
                            <div class="form-group text-center"  >
                                <button class="btn btn-primary bg-gradient " id="k"style="color:black; font-weight:700;">Create Account</button>
                            </div></br>
                            <h5 style="color:yellow;">Already have account? <a href="./login.php" style="text-decoration:none; color:blue;">Login</a></h5>
                       </form>
                   </div>
               </div>
           </div>
       </div>
    </main>
</body>
</html>