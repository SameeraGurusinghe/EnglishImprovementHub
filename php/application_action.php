<!DOCTYPE html>
<html>
<head>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title></title>
</head>
<body>

</body>
</html>
<?php

//database connection
include_once("../includes/dbconnection.php");

$a3=$_POST["inf3"];
$a4=$_POST["inf4"];
$a7=$_POST["inf7"];
$a9=$_POST["inf9"];
$a10=$_POST["inf10"];
$a13=$_POST["inf13"];
$a14=$_POST["inf14"];
$a17=$_POST["inf17"];
$a15=$_POST["inf15"];
$a16=$_POST["inf16"];
$a23=$_POST["inf23"];

//$Connection = mysqli_connect("localhost","root","","StudentManagementSystem");
if($Connection){
	/*echo "Database connection successfully completed.";
	echo ("<br>");*/
	}

else{
	/*echo "Database connection Faild.";
	echo ("<br>");*/
}

$Result = mysqli_query($Connection,"INSERT INTO applicant_details (nic,first_name,last_name,gender,nationality,contact_number,email,user_type,user_name,password,declaration) values('$a10','$a3','$a4','$a7','$a9','$a13','$a14','$a17','$a15','$a16','$a23')");

if($Result){
	echo "<script type='text/javascript'>
                
	swal({ title: 'SUCCESSFUL',text: 'Registration Completed!',icon: 'success'}).then(okay => {
	if (okay) {
    window.location.href = '../index.php';}
	});
    </script>";
	/*echo "Data added successfully.";
	echo ("<br>");*/
	}

else{
	echo "<script type='text/javascript'>
                
	swal({ title: 'Opps!',text: 'An error occured!',icon: 'error'}).then(okay => {
	if (okay) {
    window.location.href = '../index.php';}
	});
    </script>";
	/*echo "Data added Faild.";
	echo ("<br>");*/
}

?>