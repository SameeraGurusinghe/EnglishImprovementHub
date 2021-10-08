<?php
session_start();
if(!isset($_SESSION['user'])){

	header('location:login.html');
}
?>


<!DOCTYPE html>
<html language="en">
	<head>
		<title>STUDENT ACCOUNT</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		    <style>
			body {
		  background-image: url('images/admin_home.jpg');
		  background-repeat: no-repeat;
		  background-attachment: fixed;  
		  background-size: cover;
		}
		</style>

	</head>

	<?php
  	include_once("includes/dbconnection.php");
  	?>

<body>

<!--HEADER START HERE-->
<div class="col-md-12" style="height: auto;">
    <div style="background-color: rgb(27, 29, 69);">
      <div class="text-center p-3">
        
        <div class="card p-3" style="float: right;">
          <img src="images/logo_uwu.jpg" width="120" height="140" alt="" style="width:120px; height:160px;">
        </div>

        <div class="col text-center p-2">
          <div class="card card-body" style="background-color: rgb(27, 29, 69);"> 
            
            <div class="card">
            <h3 style="font-size: 70px; font-weight: bolder; color: #1c1c4a; text-shadow: 3px 3px 3px #ffc000;">UWU ENGLISH IMPROVEMENT HUB</h3>
            </div>
            <div>
            <img src="https://i.gifer.com/IaGi.gif" width=250px; height=120px; style="float: left; border:4px solid black">
            
            <h4 style="font-size: 45px; font-family: times new roman;font-weight: bold;color: white;"><a href="#"></a>Uva Wellassa University of Sri Lanka</h4>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

<div class="p-1"></div>

  <div class="card" style="background-color: rgb(27, 29, 69);">
    <div class="p-0">
      <div class="p-2" style="float: left;">
        <button type="button" class="btn btn-outline-secondary"><a href="index.php" class="text-decoration-none" style="color: yellow; font-weight: bold;">HOMEPAGE</a></button>
        <button type="button" class="btn btn-outline-secondary"><a href="news.php" class="text-decoration-none" style="color: yellow; font-weight: bold;">INFO</a></button>
        <button type="button" class="btn btn-outline-secondary"><a href="contact.php" class="text-decoration-none" style="color: yellow; font-weight: bold;">CONTACT US</a></button>
      </div>
      
      <div class="p-2" style="float: right;">

        <form action="php/logout.php" method="post">
        <div>
        <div class="l_out" style="float: right;">
        <button type="submit" class="btn btn-warning" name="logout">Log out</button>
        </div>
        </div>
        </form>

      </div>
    </div>
  </div>

<!--HEADER END HERE-->

<!-- navil bar -->
		<div id = "background">
	<div class="p-2" >
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

<!-- Brand -->
	<a class="navbar-brand" href="#" style="font-size: 18px;">UWU ENGLISH IMPROVEMENT HUB &nbsp;|&nbsp; STUDENT | WELCOME

				<?php
		  			if(isset($_SESSION["user"])){
		  			$un= $_SESSION["user"];
		  			echo "<b>".$un."</b>";
				}
				else{
					echo "user";
					}
					?>
</a>
</div>
</nav>


<!--****************************-->
    <h1 style="font-size:50px"><b>Student Dashboard</b></h1>

    <br><br><br>
       <!-- Main content -->
       <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                

                <p style="text-align:center; font-size:50px;"><b>Profile</b></p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
             
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
               

                <p style="text-align:center; font-size:50px;"><a href="gaming/gaming.html" class="text-decoration-none" style="color: black;" target="_blank"><b>Gaming & Lerning</b></a></p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                

                <p style="text-align:center; font-size:50px;"><a href="dashboard/dashbord.html" class="text-decoration-none" style="color: black;" target="_blank"><b>Score Board</b></a></p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                

                <p style="text-align:center; font-size:50px;"><b>About</b></p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        

		</div>
<!--**************************-->



 <!--footer -->
 	<div class="p-1"></div>
 	<?php
 	include_once("includes/footer.php");
 	?>

</body>
</html>
