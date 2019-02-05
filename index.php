<?php
include('frontheader.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>





<div class="alert alert-success alert-dismissible" style="display:none;" id="success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Congrats!</strong> You have now been assigned to a group! Check back on Sunday December 2nd to see your teams!
</div>
<div class = "col-sm-12">


<div class="jumbotron jumbotron-fluid">
  <h1 class="display-4" align="center">Headquarters Youth Team Extravganza</h1>
  <p class="lead" align="center">This event is for your team to come together and get to know each other and have fun with food, drinks and games!</p>
  <hr class="my-4">
  <p class="lead" align="center"><b>Where:</b> 12:00 PM - 6:00 PM</p>
    <p class="lead" align="center"><b>Where:</b> Colony Meadows Elementary</p>
    <p class="lead" align="center"><b>What:</b> The day will have group sports actvities like basketball, cricket and also team building excersies!</p>
      <div class="text-center">
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Check-In Now!
  </button>
</div>
</div>
</div>
	

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Check-In!</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
        	<form action="index.php" method="post">
        	 <div class="form-group">
			    <label for="fullname">Name</label>
			    <input type="name" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter your Full Name">
			    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
			  </div>
			  <div class="form-group">
			    <label for="phonenumber">Phone Number</label>
			    <input type="phonenumber" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone Number">
			  </div>
			  <input class="btn btn-primary btn-lg" type="submit" value="Check-In!" name="send" > </input>
			</form>
			<hr class="my-4">
			<small><b>Please note that once you sign in, you will be automatically assigned to teams for our games!<b></small>


        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>



<?php
$conn=mysqli_connect("localhost","root","","groupevents");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['send']))
{

  $fullname = $_POST['name'];
  $phonenumber = $_POST['phonenumber'];
 

if($phonenumber=='')  
    {  
        echo"<script>alert('Please Enter Phone Number!')</script>";  
    
    exit(); 
    }
    //here query check weather if user already registered so can't register again.  
    $check_email_query="select * from user_checkin WHERE user_phonenumber ='$phonenumber'";  
    $run_query=mysqli_query($conn,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
      echo "<script>alert('$fullname has already signed up! Thank you and never come again!')</script>"; 
      exit(); 
    }
 

$sql = "INSERT INTO user_checkin (user_fullname, user_phonenumber)
VALUES ('$fullname','$phonenumber')";
  if(mysqli_query($conn,$sql)){
    echo"

    <script>
    
    $('#success').fadeIn();
      
   </script>"; 



    
  }
}

?>
  


