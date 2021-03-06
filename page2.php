
<?php
  class page2 {
    // DB Params
    public function getPage() {
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
</head>
<body background="ph.jpg">
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
			<form name="contact-form" action="try.php" method="post" id="contact-form" class="contact100-form validate-form">
						<div class="wrap-input100 validate-input" data-validate="required">
					<span class="label-input102">Capacity of <br>Rearing House</span>
					<input class="input100" type="number" name="capacity" placeholder="Enter Capacity">
					<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="required">
					<span class="label-input102">Year of Establishment</span>
					<input class="input100" type="number" name="yr" id="yr" placeholder="Enter Year" max="2020" min="1900" pattern="^(19|20)\d{2}$">
					<span class="focus-input100"></span>
					</div>

          <div class="wrap-input100 validate-input" data-validate = "Address is required">
    					<span class="label-input101">House&nbspAddress:&nbsp</span>
    					<textarea class="input100" name="address" placeholder="Your Address"></textarea>
    					<span class="focus-input100"></span>
    				</div>

            <div class="wrap-input101" data-validate = "Address is required">
              <span class="label-input101">Select State:</span><br>

              <div id="selection">
                      <select id="listBox"  onclick=\'selct_district(this.value)\' name="state_value" ></select><br><br>

                <div class="wrap-input101" data-validate = "Address is required">
                <span class="label-input101">Select District:</span>

                      <select id=\'secondlist\' name="district_value"></select>
                    </div>
                    <div id="dumdiv"  style=" font-size: 10px;color: #dadada;">
                      <a id="dum" style="padding-right:0px; text-decoration:none;color: green;text-align:center;"> </a>
                    </div>

 					<div class="wrap-input100 validate-input">
					<span class="label-input102">Other Details:</span>
					<textarea class="input100" name="text1" placeholder="Details"></textarea>
					<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="required">
					<span class="label-input102"> Variety of pure silkworm race</span>
					<input class="input100" type="text" name="race" placeholder="Enter race">
					<span class="focus-input100"></span>
					</div>

					<div class="wrap-input101">
					<span class="label-input101">Select Sector&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
					<input type="radio" name="sector" value="Mulberry"> Mullberry &nbsp;&nbsp;&nbsp; <input type="radio" name="sector" value="Tasar"> Tasar  &nbsp;&nbsp;&nbsp;   <input type="radio" name="sector" value="Oak Tasar"> Oak Tasar    &nbsp;&nbsp;&nbsp;<input type="radio" name="sector" value="Eri"> Eri &nbsp;&nbsp;&nbsp; <br/> <input type="radio" name="sector" value="Muga"> Muga
					<span class="focus-input100"></span>
					</div>

					<div class="wrap-input101">
					<span class="label-input101">Select Applicant type</span>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="govt" value="Government"> Government &nbsp;&nbsp;&nbsp; <input type="radio" name="govt" value="Private"> Private   &nbsp;&nbsp;&nbsp;  <input type="radio" name="govt" value="NGO"> NGOs
					<span class="focus-input100"></span>
				</div>

					<div class="wrap-input101">
					<span class="label-input101">Rearing House Ownership</span>
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="own" value="Own"> Own  &nbsp;&nbsp;&nbsp;<input type="radio" name="own" value="Leased"> Leased&nbsp;&nbsp;&nbsp;<input type="radio" name="own" value="Rented"> Rented
					<span class="focus-input100"></span>
				</div>

					<div class="wrap-input101">
					<span class="label-input101">Mulbery garden/host plant</span><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="ow" value="Own"> Own  &nbsp;&nbsp;&nbsp;<input type="radio" name="ow" value="Leased"> Leased&nbsp;&nbsp;&nbsp;
					<span class="focus-input100"></span>
				</div>

					<div class="wrap-input101">
					<span class="label-input101">Rearing is done in separate renting house</span><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="house_sep" value="Yes"> Yes  &nbsp;&nbsp;&nbsp;
				<input type="radio" name="house_sep" value="No"> No
					<span class="focus-input100"></span>
				</div>


					<div class="wrap-input101">
					<span class="label-input101">Mulbery/Host plant</span>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="acr[]" value="Acreage"> Acreage  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="acr[]" value="Variety"> Variety
					<span class="focus-input100"></span>
				</div>

					<div class="container-contact100-form-btn">
						<div class="n1">
					<button class="contact100-form-btn" name="clear_2" onclick="myFunction()">
						<span>
						<i class="fa fa-sync-alt m-l-7" aria-hidden="true"></i>
							Clear
						</span>
					</button></div>
					<div class="n2">
					<button class="contact100-form-btn" id="next_form" name="two">
						<span>
							Next
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button></div>
				</div>
			</form>
		</div>
	</div>


				</div>
			</form>
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

	  gtag(\'config\', \'UA-23581568-13\');
	</script>

	<script>
function myFunction() {
  document.getElementById("contact-form").reset();
}
</script>
<script>
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don\'t insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>

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

	  gtag(\'config\', \'UA-23581568-13\');
	</script>

	<script>
function myFunction() {
  document.getElementById("contact-form").reset();
}
</script>
<script>
	var today=new Date();
	var y=today.getFullYear();
	today=y;
	document.getElementById("yr").setAttribute("max",today);
</script>
</body>
</html>';


    }
  }
 ?>
