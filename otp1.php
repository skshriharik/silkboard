<?php
class otp1{
  function getPage(){
    return '<!DOCTYPE html>
    <html lang="en">
    <head>
    	<title>Login OTP</title>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    	<link rel="icon" type="image/png" href="otp_images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="otp_fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="otp_fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="otp_css/util.css">
    	<link rel="stylesheet" type="text/css" href="otp_css/main.css">
    <!--===============================================================================================-->
          <script type="text/javascript">
            function preventBack() { window.history.forward(); }
            setTimeout("preventBack()", 0);
            window.onunload = function () { null };
        </script>
    </head>
    <body background="ph.jpg">

    	<div class="limiter">
    		<div class="container-login100">
    			<div class="wrap-login100">
    				<!--<form class="login100-form validate-form">-->
    					<span class="login100-form-title p-b-26">
    						Welcome
    					</span>

    					<form  action="try.php" method="POST" >

    					<div class="container-login100-form-btn">
    						<div  class="wrap-input100 validate-input" >
    								<input class="input100" type="number" maxlength="4" name="otpvalue">
    								<span class="focus-input100" data-placeholder="OTP"></span>
    							</div>
    						<div  class="wrap-login100-form-btn">
    							<div class="login100-form-bgbtn"></div>

    							<button  id="submit" class="login100-form-btn" name="otpsubmit"  >
    								Submit
    							</button>

    						</div>
    					</div>
    					</form>
    					<br>

    					<form action="try.php" method="POST">
    					<div class="container-login100-form-btn">
    					<div  class="wrap-login100-form-btn">
    							<div class="login100-form-bgbtn"></div>

    							<button  id="submit" class="login101-form-btn" name="resendotp"  >
    								Resend
    							</button>

    						</div>
    					</div>
    					</form>

    					<!--<div class="text-center p-t-31">
    						<span class="txt1">
    							Didn\'t Recieve OTP?
    						</span>
    						<form action="submitphone.php" method="POST" >
    						<a class="txt2" style="color: rgb(255,0,0);" href="submitphone.php"  name="resend">
    							Resend OTP!
    						</a>
    						</form>
    					</div>-->




    					<div class="text-center p-t-55">
    						<span class="txt1";>
    							Not your phone number?
    						</span>

    						<a class="txt2" style="color: rgb(255,0,0);" href="index.html" >
    							Renter here!
    						</a>
    					</div>
    				<!--</form>-->
    			</div>
    		</div>
    	</div>


    	<div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    	<script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    	<script src="vendor/bootstrap/js/popper.js"></script>
    	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    	<script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    	<script src="vendor/daterangepicker/moment.min.js"></script>
    	<script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    	<script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    	<script src="otp_js/main.js"></script>

    </body>
    </html>
';
  }
} ?>
