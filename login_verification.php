<?php
require_once('auth.php');
require_once('MainClass.php');
$user_data = json_decode($class->get_user_data($_SESSION['otp_verify_user_id']));
if($user_data->status){
    foreach($user_data->data as $k => $v){
        $$k = $v;
    }
}
if(isset($_GET['resend']) && $_GET['resend'] == 'true'){
    $resend = json_decode($class->resend_otp($_SESSION['otp_verify_user_id']));
    if($resend->status == 'success'){
        echo "<script>location.replace('./login_verification.php')</script>";
    }else{
        $_SESSION['flashdata']['type']='danger';
        $_SESSION['flashdata']['msg']=' Resending OTP has failed.';
        echo "<script>console.error(".$resend.")</script>";
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $verify = json_decode($class->otp_verify());
    if($verify->status == 'success'){
        echo "<script>location.replace('p.php');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login with OTP</title>
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
            height:calc(100%);
            width:calc(100%);
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
        }
        a.disabled {
            pointer-events: none;
            cursor: default;
        }
        #mb{
            border-radius:10px;
        }
        #m{
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
                   <h4 class="card-title text-center" style="font-weight:800;">LOGIN - Verification</h4>
               </div>
               <div class="card-body py-4" style="background-color:indianred;">
                   <div class="container-fluid">
                       <form action="./login_verification.php" method="POST">
                           <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>">
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
                                <p class="" style="color:yellow; font-weight:600;">We have sent an OPT in your Email [<?= isset($email) ? $email : '' ?>].</p>
                            </div>
                            <div class="form-group">
                               <label for="otp" class="label-control" style="font-weight:500;">Please Enter the OTP</label>
                               <input type="otp" name="otp" id="otp" class="form-control rounded-0" value="" maxlength="6" pattern="{0-9}+" autofocus required>
                            </div>
                            <div class="clear-fix mb-4"></div>
                            <div class="form-group text-end">
                                <a  class="btn btn-secondary bg-gradient <?= time() < strtotime($otp_expiration) ? 'disabled' : '' ?>" data-stat="<?= time() < strtotime($otp_expiration) ? 'countdown' : '' ?>" href="./login_verification.php?resend=true" id="resend"><?= time() < strtotime($otp_expiration) ? 'Resend in '.(strtotime($otp_expiration) - time()).'s' : 'Resend OTP' ?></a>
                                <button class="btn btn-primary bg-gradient "id="mb" style="font-weight:750; color:black;" >Confirm</button>
                            </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
    </main>
</body>
<script>
    $(function(){
        var is_countdown_resend = $('#resend').attr('data-stat') == 'countdown';
        if(is_countdown_resend){
            var sec = '<?= time() < strtotime($otp_expiration) ? (strtotime($otp_expiration) - time()) : 0 ?>';
            var countdown = setInterval(() => {
                if(sec > 0){
                    sec--;
                    $('#resend').text("Resend in "+(sec)+'s')
                }else{
                    $('#resend').attr('data-stat','')
                                .removeClass('disabled').text('Resend OTP')
                    clearInterval(countdown)
                }
            }, 1000);
        }
    })
</script>
</html>