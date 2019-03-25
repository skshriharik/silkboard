<?php
include_once 'connect.php';
$obj = new Database();
$db = $obj->connect();

	if(isset($_POST['one'])){
		include 'page2.php';
		$obj = new page1();
		echo $obj->connect();
		 echo "<html><body>HELLO SIR<body></html>";/*
	         $first_name = mysqli_real_escape_string($db ,$_POST['first_name']); // Fetching all the vlues from first page
           $middle_name = mysqli_real_escape_string($db ,$_POST['middle_name']);
           $land_line = mysqli_real_escape_string($db, $_POST['land_line']);
					 $mobile = '8123452478';
					 $insert = "INSERT INTO pdetails (fname , father , mobile , landline) VALUES('$first_name' , '$middle_name' , '$mobile' , '$land_line' )";
					 if(mysqli_query($db, $insert))
	               echo "<html><body>HELLO SIR<body></html>";
	           else
	             echo "Failed while database updation"; */
	}

?>
