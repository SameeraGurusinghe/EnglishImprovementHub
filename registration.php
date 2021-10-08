<!DOCTYPE html>
<html language="en">
    <head>
        <title>USER REGISTRATION</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/registration.css" type="text/css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
    </head>

    <!--DATABASE CONNECTION-->
    <?php
  	include_once("includes/dbconnection.php");
  	?>

<body>

<!--javaScript for validation start-->
<script type="text/javascript">

  function val(){
    var iname = document.getElementById("i3").value;
    var fname = document.getElementById("i4").value;

    var nic = document.getElementById("i10").value;
    var nicl = nic.length;
    var nicOld = nic.substr(9,10);
    var nicOldInt = nic.substr(0,9);

    var tp = document.getElementById("i13").value;
    var len = tp.length;
    var status = tp.substr(0,3);

    if(iname==""){
      swal("First Name cannot be empty","Try again!", "warning");
    }
    else if(fname==""){
      swal("Last Name cannot be empty","Try again!", "warning");
    }
    else if(nic=""){
      swal("NIC number can not be empty","Try again!", "warning");
    }
    else if(nicOld!="v" && nicOld!="V"){
      swal("Incorrect NIC number","Try again!", "warning");
    }
    else if(isNaN(nicOldInt)){
      swal("NIC number format is invalid","Try again!", "warning");
    }
    else if(nicl!=10){
      swal("You entered NIC number is not correct format","Try again!", "warning")
    }
    else if(isNaN(tp)){
      swal("You can enter number only","Try again!", "warning");
    }
    else if(len!=10){
			swal("Telephone number is too large or small than its default value","Try again!", "warning");
		}
		else if(status!="071" && status!="070" && status!="077" && status!="076" && status!="075" && status!="078" && status!="072"){
			swal("You entered telephone number is not using in Sri Lanka.","Try again!", "warning");
		}
    /*else{
      swal("Your data successfully saved our database. Thank you.!");
    }*/
  }
</script>


<div>
  <div class="p-5" style="background-color: #06053a;">
    <div class="p-5">
    <div class="row">
        <div class="col-md-7 container registration-container">
            <div class="card h-100">

    <form action="php/application_action.php" method="post" enctype="multipart/form-data">     
      <div class="card" style="background-color: #bcd3ec;">

        <h2 style="text-align: center;">UWU ENGLISH IMPROVEMENT HUB</h2>
        <h4 style="text-align: center;">Uva Wellassa University of Sri Lanka</h4>
        <p style="text-align: center;"><img src="images/logo_uwu.jpg" alt="" style="width:120px; height: 130px;"></p>
        <h4 style="text-align: center;"><u>USER REGISTRATION</u></h4><br>

        <strong style="color: red; font-size: large;">Feilds marked with an asterisk (*) are required.</strong>

        <div class="form-group">
          <div class="col-md-6">
            <label>1. First Name: <strong style="color: red; font-size: x-large;">*</strong></label>
            <input type="text" class="form-control" name="inf3" id="i3" required>
          </div>
        </div>
    
        <div class="form-group">
          <div class="col-md-6">
            <label>2. Last Name: <strong style="color: red; font-size: x-large;">*</strong></label>
            <input type="text" class="form-control" name="inf4" id="i4" required>
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-md-6">
            <label>3. Gender: <strong style="color: red; font-size: x-large;">*</strong></label>
            <select class="form-control" name="inf7" required>
                <option selected>Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6">
            <label>4. Nationality: <strong style="color: red; font-size: x-large;">*</strong></label>
            <select class="form-control" name="inf9" required>
              <option selected>Select</option>
              <option value="sinhala">Sinhala</option>
              <option value="tamil">Tamil</option>
              <option value="muslim">Muslim</option>
          </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6">
            <label>5. NIC No: <strong style="color: red; font-size: x-large;">*</strong></label>
            <input type="text" class="form-control" placeholder="Ex: 980000000V" name="inf10" id="i10" required>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6">
            <label>6. Contact Number: <strong style="color: red; font-size: x-large;">*</strong></label>
            <input type="text" class="form-control" placeholder="Mobile" name="inf13" id="i13" required>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6">
            <label>7. Email: <strong style="color: red; font-size: x-large;">*</strong></label>
            <input type="email" class="form-control" name="inf14" required>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6">
            <label>08. User Type: <strong style="color: red; font-size: x-large;">*</strong></label>
            <input type="text" class="form-control" name="inf17" value="student">
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6">
            <label>09. User Name: <strong style="color: red; font-size: x-large;">*</strong></label>
            <input type="text" class="form-control" name="inf15" required>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6">
            <label>10. Password: <strong style="color: red; font-size: x-large;">*</strong></label>
            <input type="password" class="form-control" name="inf16" required>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-10">
          <div class="form-check">
          <input class="form-check-input" type="checkbox" name="inf23" required>
          <label class="form-check-label" for="gridCheck" style="font-style: italic;">I do hereby declare that all the information given above is true.</label>
          </div>
          </div>
        </div><hr/>

        <div class="form-group">
          <div class="col-md-12">
            <button type="reset" class="btn btn-danger" style="float: center;">CLEAR DATA</button>
            <button type="submit" class="btn btn-success" style="float: right;" onclick="val();">Create an Account</button>
          </div>
        </div>
        
    </form>

                    
  </div>
</div>
</div>
</div>

</div>
</div>

    </body>
</html>