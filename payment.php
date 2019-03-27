<?php
class payment {
  public function getPaymentPage(){
    return '<!DOCTYPE html>
    <html lang="en">
    <head>
    	<title>Silk Board</title>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
    	<link rel="stylesheet" type="text/css" href="css/util.css">
    	<link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="jquery.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="state.js"></script>
    </head>
    <body  background="ph.jpg">
    	<div class="container-contact100">


    		<div class="wrap-contact100">

    			<div class="contact100-form-title" style="background-image: url(images/nb.JPEG);">
    				<span class="contact100-form-title-1">
    				Registration
    				</span>

    				<span class="contact100-form-title-2">
    					 Registration /Renewal As A Silkworm Seed Cocoon Producer
    				</span>
    			</div>

          <form action = "success.php" method = "POST">

         &nbsp&nbsp&nbsp&nbsp Amount to be paid:   6 rs
          <br><br><br>

        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <script
            src="https://checkout.razorpay.com/v1/checkout.js"
            data-key=rzp_test_YUDG0XpnR2Mm9r
            data-amount="500"
            data-buttontext="Pay Amount"
            data-name="CENTRAL SILK BOARD"
            data-description="Purchase Description"
            data-image="https://your-awesome-site.com/your_logo.jpg"
            data-prefill.name=""
            data-prefill.email="hello@hello.com"
            data-theme.color="#F37254">
        </script>



        <br><br>
    </form>
    		</div>
    	</div>


    				</div>
    			</form>
    		</div>
    	</div>




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
    	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
    	<script src="js/map-custom.js"></script>
    <!--===============================================================================================-->
    	<script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    	<script>
    	  window.dataLayer = window.dataLayer || [];
    	  function gtag(){dataLayer.push(arguments);}
    	  gtag("js", new Date());

    	  gtag("config", "UA-23581568-13");
    	</script>

    </body>
    </html>';

  }
}

 ?>
