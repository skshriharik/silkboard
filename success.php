<?php
class success {
  public function getPage(){
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<style type="text/css">
		[type="date"] {
  background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
}
[type="date"]::-webkit-inner-spin-button {
  display: none;
}
[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
}

/* custom styles */

/*input {

  width: 100px;
}*/
	</style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="jquery.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="state.js"></script>
		<script> function disableSubmit() {
		  document.getElementById("next_form").disabled = true;
		 }

		  function activateButton(element) {

		      if(element.checked) {
		        document.getElementById("next_form").style.display="none";
		       }
		       else  {
		        document.getElementById("next_form")..style.display="block";
		      }

		  }</script>
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
     <div  style="text-align:center"> <b><h2><br>Application registration successful.</h2>
     <br>
     <h4>
       Your application has been submitted to Central Silk Board and status of your application will be notified shortly
     </h4> </b>
         <p> <br>  <br> IMPORTANT: Take a PRINTOUT of your application for future proof <br> </p></div>

    <table style="align:left">
    <tr>  <td>
    <form name="contact-form" action="pdf_generate.php"  target="_blank" method="post" id="contact-form" class="contact100-form validate-form" enctype="multipart/form-data" >


      <div class="container-contact100-form-btn">
         <div class="n1">
				<!--	<button class="contact100-form-btn" name="clear_up" onchange="myFunction()">
						<span>
						<i class="fa fa-sync-alt m-l-7" aria-hidden="true"></i>
							Clear
						</span>
					</button></div> -->

					<div class="n2">
					<button type="submit" class="contact100-form-btn" name="fin" id="next_form">
						<span>
							PRINT
						</span>
					</button>
					</div>
          </div>
        </div>

             </form>
            </td>
	</tr>
	</table>


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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag(\'js\', new Date());
	  var ext = $(\'#files\').val().split(\'.\').pop().toLowerCase();
        if($.inArray(ext, [\'gif\',\'png\',\'jpg\',\'jpeg\']) == -1) {
        alert(\'invalid extension!\');
    }

	  gtag(\'config\', \'UA-23581568-13\');


	</script>

	<script>
function myFunction() {
  document.getElementById("contact-form").reset();
}

</script>


</body>
</html>
';
  }
}
include_once 'connect.php';
$obj = new Database();
$db = $obj->connect();
$ack_no = 'SB270319103235';
$tranx = $_POST['razorpay_payment_id'];
$query = "UPDATE plot SET  transaction_id  = '$tranx' WHERE ack_number = '$ack_no'";
if(mysqli_query($db , $query)){
  $ob = new success();
  echo $ob->getPage();
}
else {
  echo mysqli_error($db);
}
?>
