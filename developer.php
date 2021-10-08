<?php
session_start();
if(!isset($_SESSION['user'])){

	header('location:login.html');
}
?>


<!DOCTYPE html>
<html language="en">
	<head>
		<title>DEVELOPER</title>
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
	
	</head>

<!--DATABASE CONNECTION-->
	<?php
    include_once("includes/dbconnection.php");
    ?>
	
	<body>

<!--SCRIPTING START-->

	<script>
	function fun(v){
	
	var xhr=new XMLHttpRequest();
	xhr.onreadystatechange=function(){
	if(xhr.readyState==4){
	document.getElementById("showcase").innerHTML=xhr.responseText;
	//document.getElementById("btnList").remove();
	}
	}

	if(v!="default"){
		xhr.open("GET",v+".php",true);
		
	}
	else{
		
		LoadP();
	}
	
	xhr.send(null);
	return true;
	
	}

	function LoadP(){
	var xhr=new XMLHttpRequest();
	xhr.onreadystatechange=function(){
	if(xhr.readyState==4){
	document.getElementById("showcase").innerHTML=xhr.responseText;
	//document.getElementById("btn1").style.background="gray";
	//ocument.getElementById("btn1").disabled="disabled";
	}
	}
	
	xhr.open("GET","dashboard1.php",true);
	
	xhr.send(null);
	return false;

}

</script>

<!--SCRIPTING END-->


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
	
<!-- navi bar -->
	<div class="p-2">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<a class="navbar-brand" href="#">UWU ENGLISH IMPROVEMENT HUB &nbsp;|&nbsp; DEVELOPER</a>
		</nav>
	</div>
	
<!-- attendance box -->
	<div class="row">
		<div class="col-md-4" style="height: auto;">
			<div class="card h-100 p-3" style="background-color: rgb(27, 29, 69);">
				<div>
					<h3 style="text-align: center; font-size: xx-large;color: white;">USER INFO</h3>
		
<!-- applicant and registered student info start-->
	<div class="card p-4" style="background-color: rgb(184, 185, 196);">
		<div class="p-2" style="text-align: center;">

<!--space between certificate button and register,applican button-->
	<div class="p-2" id="accordionExample">
		<div class="card card-body" id="headingOne">
			<div>
				<button type="button" class="btn btn-info btn-sm" style="width: 100px;" onclick="fun('director_action/cc_registered_data');"><b>REGISTERED</b></button>
			</div>
		</div>
	</div>
	</div>

	</div>
	</div>

	</div>
	</div>
	

<div class="col-md-8" style="height: auto;" id="showcase">
</div>
</div>
<br>

<!--MAKE AN ANNOUNCEMENT START-->
<div class="p-1">
		<h5 style="text-align: center;"><b>Drop New English Quotes Here</b></h5>
			<div class="p-2"></div>
				<div class="card card-body p-6">
					<div>
						<div class="card-Secondary">
							<div class="card bg-light">
								<div class="card-body text-center">
                                    <div class="p-2">
                                        <form action="admin_php/english_quotes.php" method="post">
                                        <input type="text" name="tit" style="width: 350px;" placeholder="Write Title" required>
                                        </div>

                                        <textarea type="text" name="annou" style="width: 350px; height: 120px;" placeholder="Write Quotes" required></textarea>
										</div>
									</div>
								</div>
							</div>

	<div class="p-2">
		<button type="submit" class="btn btn-success btn-sm" style="width: 80px; float: center;"><b>PUBLISH</b></button>
		<button type="reset" class="btn btn-warning btn-sm" style="width: 80px; float: center;"><b>CLEAR</b></button>
		
		</form>	
		</div>
		</div>
		</div>
						
<!--MAKE AN ANNOUNCEMENT END-->


<!--footer -->
	<div class="p-1"></div>
    <?php
    include_once("includes/footer.php");
    ?>
	
</body>
</html>