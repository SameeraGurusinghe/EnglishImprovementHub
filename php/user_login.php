<?php
session_start();

include_once("../includes/dbconnection.php");

	$username = $_POST["un"];
	$password = $_POST["pass"];

$Result=mysqli_Query($Connection,"select*from applicant_details where user_name='$username' and password='$password' ");

$c = false;

while($row=mysqli_fetch_array($Result)){
	$c = true;
	$ut=$row["user_type"];
	$_SESSION["user"] = $username;
}

 // user found
 if ($c) {
			
			if ($ut== 'admin') {
				$_SESSION['success']  = "You are now logged in";
				header('location: ../admin.php');		  
            }

            elseif ($ut== 'student') {
				$_SESSION['success']  = "You are now logged in";
				header('location: ../student_acc.php');		  
            }

            elseif ($ut == 'developer') {

				$_SESSION['success']  = "You are now logged in";
				header('location: ../developer.php');		  
            }

            elseif ($ut== 'course_coordinator') {

				$_SESSION['success']  = "You are now logged in";
				header('location: ../co_codinator.php');		  
            }
            
            elseif ($ut== 'officer') {
				$_SESSION['success']  = "You are now logged in";
                header('location: ../officer.php');
            }
        }
            else {
                header('location: ../login.html');
            }

				//if(isset($_SESSION['url'])){ 
					//$url = $_SESSION['url']; }// holds url for last page visited.
				//else {
   					//$url = "login.html";} // default page for 

				//header("Location: $url");


?>