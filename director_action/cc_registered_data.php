
<html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/programe.css" type="text/css" rel="stylesheet">
        <link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<body>


<?php
    include_once("../includes/dbconnection.php");
    ?>
    
    <div class="card h-100" style="background-color: rgb(27, 29, 69 );">
			<div class="container">
				<div class="p-2"><h3 style="text-align: center; font-size: xx-large;color: white;"></h3></div>
			

<div class="p-2">
	<h3 style="text-align: center; font-size: xx-large;color: white;">REGISTERED USER INFORMATION</h3>
		<div class="accordion " id="accordionExample">
				  
			<div class="card">
			<div class="card bg-secondary text-white">				 
				  
			<!--info php code -->
				<?php

                $Result = mysqli_query($Connection,"SELECT * FROM applicant_details WHERE user_type='student'");
                
                echo ("<table border='1'>");

				echo ("<tr>");
				echo ("<th>NIC</th>");
		        echo ("<th>First Name</th>");
		        echo ("<th>Last Name</th>");
               
                echo ("<th>Gender</th>");
				echo ("<th>Nationality</th>");
				echo ("<th>Contact</th>");
				echo ("<th>E-mail</th>");

				
                
				echo ("</tr>");

				

				while($row=mysqli_fetch_array($Result)){

				echo "<tr>";
				    echo "<td>".$row['nic']."</td>";
					echo "<td>".$row['first_name']."</td>";
					echo "<td>".$row['last_name']."</td>";
                    echo "<td>".$row['gender']."</td>";
                    echo "<td>".$row['nationality']."</td>";
					echo "<td>".$row['contact_number']."</td>";
					echo "<td>".$row['email']."</td>";
                echo "</tr>";
                }
                
                echo "<br>";
                
                echo ("</table>");
                ?>
				  
	</div></div></div></div>


</body>
</html>
