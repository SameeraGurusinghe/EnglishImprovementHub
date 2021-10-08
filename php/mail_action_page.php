<?php
	$username = filter_input(INPUT_POST, 'username');
	$email = filter_input(INPUT_POST, 'email');
	$message = filter_input(INPUT_POST, 'message');
	
	if(!empty($username)){
		if(!empty($email)){
			#if(!empty($feedback)){
				$host = "localhost";
				$dbusername = "root";
				$dbpassword = "";
				$dbname = "uwu_english_improvement_hub";
				
				//creat connection
				
				$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
				if(mysqli_connect_error()){
					die('Connect_Error('.mysqli_connect_errno().')' .mysqli_connect_error());
				}else{
					$sql = "INSERT INTO message_details (username,email,message) values('$username','$email','$message')";
					if ($conn->query($sql)){
						echo header("Location: ../grammer_quiz/index.html");;
					}
					else{
						echo "Error: " .$sql. "<br>" .$conn->error;
					}
					$conn->close();
				}
			}
			else{
				echo "Password should not be empty";
				die();
			}
		}
		else{
				echo "username should not be empty";
				die();
		}
	#}	
?>