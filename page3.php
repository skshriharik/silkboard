
<?php
  class page3 {
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

            <script>
            window.location.hash="no-back-button";
            window.location.hash="Again-No-back-button";//again because google chrome don\'t insert first hash into history
            window.onhashchange=function(){window.location.hash="no-back-button";}
            </script>
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
      			<form name="contact-form" action="try.php" method="post" id="contact-form" class="contact100-form validate-form" enctype="multipart/form-data">


      					 <table><tr><td>
                  		<div class="wrap-input101 validate-input" data-validate="Name is required">
      					<br><font size="05px">Upload Your Photo:<br></span>
                </font>
                  <input type="file" name="image" id="files" accept=".jpeg , .jpg"  required></td><td>
                  <img id="image"  width="160" height="200"><br><br></object></td></tr>
              </div>



                 <script>document.getElementById("files").onchange = function () {
                           var fileInput = document.getElementById("file");
               var filePath = fileInput.value;
               var allowedExtensions = /(\.jpg|\.jpeg|\.gif)$/i;
                  if(!allowedExtensions.exec(filePath)){
                      alert("Please upload file having extensions .jpeg/.jpg/.png/.gif only.");
              fileInput.value = "";
                   }
                  var reader = new FileReader();

                  reader.onload = function (e) {
                      // get loaded data and render thumbnail.
                      document.getElementById("image").src = e.target.result;
                  };

                  // read the image file as a data URL.
                  reader.readAsDataURL(this.files[0]);
              };
              </script>

              <script>
                  function fileValidation(){
          var fileInput = document.getElementById("files");
          var filePath = fileInput.value;
          var allowedExtensions = /(\.jpg|\.jpeg|\.gif)$/i;
          if(!allowedExtensions.exec(filePath)){
              alert("Please upload file having extensions .jpeg/.jpg/.png/.gif only.");
              fileInput.value = "";
              return false;
          }
              </script>
            <tr><td>
          <div class="wrap-input101 validate-input" data-validate="Name is required">
      					<br><font size="05px">Upload Your Sign:<br></span>
                  </font>
                  <input type="file" name="sign" id="sign" accept=".jpeg , .jpg"  required></td><td>
                  <img id="sig"  width="200" height="100"><br><br></object></td></tr>
              </div>
                 <script>document.getElementById("sign").onchange = function () {


                      var reader = new FileReader();

                      reader.onload = function (e) {
                          // get loaded data and render thumbnail.
                          document.getElementById("sig").src = e.target.result;
                      };

                      // read the image file as a data URL.
                      reader.readAsDataURL(this.files[0]);
                  };
             </script></font></div></td></tr><tr><td>


      			<br><b><h2><center>Declaration<hr></center></h2></b></center>
      			I decalre that the information given above is true to the best of my knowledge and belief and no part thereof is false<br>
            <center> <input type="checkbox" name="terms" id="terms" required onchange="activateButton(this)">  I Agree Terms & Coditions </input>


      			<div class="container-contact100-form-btn">
      						<div class="n1">
      				<!--	<button class="contact100-form-btn" name="clear_up" onchange="myFunction()">
      						<span>
      						<i class="fa fa-sync-alt m-l-7" aria-hidden="true"></i>
      							Clear
      						</span>
      					</button></div> -->
      					<div class="n2">
      					<button type="submit" class="contact100-form-btn" name="three" id="next_form">
      						<span>
      							Submit
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
      function myFunction() {
        document.getElementById("contact-form").reset();
      }
      </script>

      </body>
      </html>';


    }
  }
 ?>
