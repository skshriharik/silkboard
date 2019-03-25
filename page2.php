<?php
  class page1 {
    // DB Params

    public function connect() {
      return '<div class="wrap-input100 validate-input" data-validate="Phone is required">
      					<span class="label-input101">Landline:<br>(Example:<br>080-2486242)</span>
      					<input class="input100" type="text" name="land_line" placeholder="Enter Landline number" id="phone" minlength="10" maxlength="10">
      					<span class="focus-input100"></span>
      				</div>';
    }
  }
 ?>
