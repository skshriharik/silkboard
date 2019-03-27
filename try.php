<?php
include_once 'connect.php';
ini_set('display_errors',1);

ob_start();
$obj = new Database();
$db = $obj->connect();
session_start();

function process($no) {
        $rndno=rand(1000, 9999);
        $_SESSION['var']=$rndno;
        $textMessage="Your OTP for Silk Board registration is:".$rndno;
        $mobileNumber=$no;
        echo $no;
        echo $rndno;
      /*  $apiKey = urlencode('J02LbV43NlU-kJvKwyb3Ee1YHAAX1tIGdqO3uTzgAD');
        $numbers = array($mobileNumber);
        $sender = urlencode('TXTLCL');
        $message = rawurlencode($textMessage);
        $numbers = implode(',', $numbers);
   // Prepare data for POST request
        $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
   // Send the POST request with cURL
        $ch = curl_init('https://api.textlocal.in/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        echo $rndno;
        echo $response;*/
    }


if(isset($_POST['myapp']))
{
      $mobile = $_SESSION['mobile'];
      //echo $mobile;
      $query1= "SELECT * FROM pdetails,plot where pdetails.mobile=plot.mobile and pdetails.mobile='$mobile'";
    									$result1=mysqli_query($db,$query1);

    									while($row = mysqli_fetch_array($result1))
    									{
    										echo '<form action="pdg_generate.php" method="post">';
    										echo  $row['fname'];
    										echo  $row['mobile'] . "</br>";
    										echo  $row['father'] . "</br>";
    										echo  $row['landline'] ."</br>";
    										echo   $row['addr'] . "</br>";
    										echo  $row['district'] . "</br>";
    										echo  $row['state'] ."</br>";
    										echo  $row['ack_number'] ."</br>";
    										echo  $row['sector'] ."</br>";;
    										echo  $row['transaction_id'] ."</br>";
    										echo '<input type="hidden" name="ack" value='.$row["ack_number"].'/>';
    										echo '<input type="submit" name="pdf" value="Generate PDF"/>';
    									        echo '</form>';
    									        echo '</br>';

    									}
}




if(isset($_POST['phnsubmit']))
{
      $ph_number="";
      $ph_number=$_POST["Phone"];
      echo $ph_number;
      $_SESSION['mobile']=$ph_number;
      process($ph_number);
      header("Refresh: 1.5; url= otp1.html");
}

if(isset($_POST['resendotp']))
{
      $ph_number=$_SESSION['mobile'];
      process($ph_number);
      header("Refresh: 2; url= otp1.html");
}

if(isset($_POST['otpsubmit']))
{
        $numbers="";
	$rno=$_SESSION['var'];
	$ph_number=$_SESSION['mobile'];

	$urno=$_POST['otpvalue'];

	if(!strcmp($rno,$urno))
	{
    $query = "SELECT * from pdetails WHERE mobile = '$ph_number' ";
    if($res = mysqli_query($db , $query)){
      $arr = mysqli_fetch_assoc($res);
      if($arr['fname']===NULL){
      //  echo "new";
        include 'page1.php';
       $ob = new page1();
       echo $ob->getPage();

      }
      else {
        include 'dashboard.php';
         $ob = new dashboard();
         echo $ob->getPage();
      // echo "old";

      }
    }else {
      echo mysqli_error($db);
    }
	/*$name=$_SESSION['name'];
	$email=$_SESSION['email'];
	$phone=$_SESSION['phone'];
	// Create connection
	$sql = "INSERT INTO quote (name, email, phone)
	VALUES ('$name', '$email', '$phone')";
	if (mysqli_query($conn, $sql))*/
		// Account details
		$apiKey = urlencode('J02LbV43NlU-kJvKwyb3Ee1YHAAX1tIGdqO3uTzgAD');

		// Message details
		/*if(isset($_POST['Phone']))
		$numbers = $_POST["Phone"];
		else echo "Redirecting......";*/

	      /*  $sender = urlencode('TXTLCL');
		$message = rawurlencode('You Have been registered successfully');

		//$numbers = implode(',', $numbers);

		// Prepare data for POST request
		$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

		// Send the POST request with cURL
		$ch = curl_init('https://api.textlocal.in/send/');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);*/
		//header( "Refresh: 0.01 url= page1.html" ); exit();
	/*else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);*/
	return true;
	}
	else
	{
	   echo "<script type='text/javascript'> alert('Incorrect OTP  Please Reenter OTP') </script>";
	   //echo "otp1.html" ;
	header("Refresh: 0.001 url= otp1.html");

	//echo 'Incorrect OTP <br> Re-enter OTP <br> Redirecting...';
	//session_destroy();
	}
}



if(isset($_POST['one']))
{

	   $first_name = mysqli_real_escape_string($db ,$_POST['first_name']); // Fetching all the vlues from first page
           $middle_name = mysqli_real_escape_string($db ,$_POST['middle_name']);
           $land_line = mysqli_real_escape_string($db, $_POST['land_line']);
	   //$mobile = '812452562478';

           $mobile=$_SESSION['mobile'] ;
           echo $mobile;
           echo $first_name;


				$insert = "INSERT INTO pdetails (fname , father , landline , mobile) VALUES ('$first_name' , '$middle_name' , '$land_line' ,  '$mobile' )";
					 if(mysqli_query($db, $insert)){
             include 'page2.php';
		         $p2 = new page2();
		         echo $p2->getPage();
		         echo "yes";
           }else {
             header ('Location: dashboard.html');
           	//mysqli_error($db);
           }

}


  if(isset($_POST['newentry'])){
    echo $_SESSION['mobile'];
    include 'page2.php';
    $p2 = new page2();
    echo $p2->getPage();
  }
  if(isset($_POST['two'])){

      $mobile = $_SESSION['mobile'];
      $sb='SB';
      date_default_timezone_set("Asia/Calcutta");
      $ack_no = $sb.date('dmyhis', time());
      $_SESSION['ack'] = $ack_no ;
      echo  $_SESSION['ack'];
      $address = mysqli_real_escape_string($db ,$_POST['address']);
      $race = mysqli_real_escape_string($db, $_POST['race']);
      $sector =  $_POST['sector'];
      $app_type = mysqli_real_escape_string($db ,$_POST['govt']);
			$rear_h_own =mysqli_real_escape_string($db ,$_POST['own']);
			$gar = mysqli_real_escape_string($db ,$_POST['ow']);
			$capacity = $_POST['capacity'];
      $year_est =  $_POST['yr'];
      $plant = $_POST['acr'];
      $other = mysqli_real_escape_string($db, $_POST['text1']);
      $fivedate =  date("Y-m-d",strtotime("+5years"));

    $plant = $_POST['acr'];
    $dt = date("Y/m/d");

    $new_plant = "";

    foreach($plant as $chkNew1_plant)
    {
    $new_plant .= $chkNew1_plant . ",";
    }
      $house_sep = mysqli_real_escape_string($db, $_POST['house_sep']);
      $state =mysqli_real_escape_string($db, $_POST['state_value']);
      $district = mysqli_real_escape_string($db, $_POST['district_value']);


$ins="INSERT INTO plot(mobile, addr, district,state,pure_silk_proposed,sector, app_type, house_owner, rearing_done_sep, host_plant_1, capacity, host_plant_2, year_estab,  other_details,date, ack_number, exp_date)
VALUES('$mobile', '$address','$district','$state','$race', '$sector','$app_type', '$rear_h_own','$gar', '$new_plant' , '$capacity', '$plant' ,'$year_est', '$other','$dt','$ack_no', '$fivedate' )";
     if(mysqli_query($db , $ins)){
      include 'page3.php' ;
       $p3 = new page3();
      echo $p3->getPage();
      // echo "Done";
     }else{
         echo "Error: " . $sql . "<br>" . mysqli_error($db);
     }
}
if(isset($_POST['three'])){

  $ack_no = $_SESSION['ack'];
  $file1=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $file2=addslashes(file_get_contents($_FILES["sign"]["tmp_name"]));
  $query = "UPDATE plot SET produce_photo = '$file1' ,  sign_photo ='$file2'  WHERE ack_number= '$ack_no' ";
  if(mysqli_query($db,$query)){
    include 'payment.php';
    $pay = new payment();
    echo $pay->getPaymentPage();
     echo 'inserted';
  }

  else
  echo "Error <br>" .mysqli_error($db);

}

?>
