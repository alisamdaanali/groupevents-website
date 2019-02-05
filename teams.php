<?php
include('frontheader.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Team Assignment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<div class="container">

	
    <div class="jumbotron">  
    <h1 align="center">Teams</h1>    
</div>
<div class="row">

	<!--Cricket Teams-->
	<div class="col-md-6">
		 <caption><h1 align="center">Cricket</h1></caption>
		<?php 
 include('config.php');
 $query = "select * from gm_cricket c inner join user_checkin uc on c.user_id = uc.user_id where team_id = 1";
 //$count = "select count(user_id) from user_checkin";
 $result3 = mysqli_query($link,$query);
 
?>
<table class="table">

  <thead class="thead-dark">
    <tr>

    		<th scope="col">Team West</th>
    
    </tr>
  </thead>
  <tbody>
    <?php
     while($row = mysqli_fetch_array($result3)){
         echo "<tr>";
         echo "<td>" . $row['user_fullname'] . "</td>";
         echo "</tr>";
     }
    ?>
    
</table>


<?php 
 $query = "select * from gm_cricket c inner join user_checkin uc on c.user_id = uc.user_id where team_id = 2";
 //$count = "select count(user_id) from user_checkin";
 $result4 = mysqli_query($link,$query);
?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Team East</th>
    </tr>
  </thead>
  <tbody>
    <?php
     while($row = mysqli_fetch_array($result4)){
         echo "<tr>";
         echo "<td>" . $row['user_fullname'] . "</td>";
         echo "</tr>";
     }
    ?>
</table>




	</div>


		<!--Basketball Teams-->
		<div class="col-md-6">
			<caption><h1 align="center">Basketball</h1></caption>
				<?php 
			$query2 = "select * from team where teams_id = 1";		
			 $query = "select * from gm_bball c inner join user_checkin uc on c.user_id = uc.user_id where team_id = 1";
			 //$count = "select count(user_id) from user_checkin";
			 $result3 = mysqli_query($link,$query);
			 $result4 = mysqli_query($link,$query2);
			?>
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			     <?php
    	while($row = mysqli_fetch_array($result4)) {
    		 echo "<th scope='col'>" . $row['team_name'] . "</th>";
    	}

      ?>
			    </tr>
			  </thead>
			  <tbody>
			    <?php
			     while($row = mysqli_fetch_array($result3)){
			         echo "<tr>";
			         echo "<td>" . $row['user_fullname'] . "</td>";
			         echo "</tr>";
			     }
			    ?>
			    
</table>

				<?php 
			$query2 = "select * from team where teams_id = 2";		
			 $query = "select * from gm_bball c inner join user_checkin uc on c.user_id = uc.user_id where team_id = 2";
			 //$count = "select count(user_id) from user_checkin";
			 $result3 = mysqli_query($link,$query);
			 $result4 = mysqli_query($link,$query2);
			?>
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			     <?php
    	while($row = mysqli_fetch_array($result4)) {
    		 echo "<th scope='col'>" . $row['team_name'] . "</th>";
    	}

      ?>
			    </tr>
			  </thead>
			  <tbody>
			    <?php
			     while($row = mysqli_fetch_array($result3)){
			         echo "<tr>";
			         echo "<td>" . $row['user_fullname'] . "</td>";
			         echo "</tr>";
			     }
			    ?>
			    
</table>

				<?php 
			$query2 = "select * from team where teams_id = 3";		
			 $query = "select * from gm_bball c inner join user_checkin uc on c.user_id = uc.user_id where team_id = 3";
			 //$count = "select count(user_id) from user_checkin";
			 $result3 = mysqli_query($link,$query);
			 $result4 = mysqli_query($link,$query2);
			?>
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			     <?php
    	while($row = mysqli_fetch_array($result4)) {
    		 echo "<th scope='col'>" . $row['team_name'] . "</th>";
    	}

      ?>
			    </tr>
			  </thead>
			  <tbody>
			    <?php
			     while($row = mysqli_fetch_array($result3)){
			         echo "<tr>";
			         echo "<td>" . $row['user_fullname'] . "</td>";
			         echo "</tr>";
			     }
			    ?>
			    
</table>

				<?php 
			$query2 = "select * from team where teams_id = 4";		
			 $query = "select * from gm_bball c inner join user_checkin uc on c.user_id = uc.user_id where team_id = 4";
			 //$count = "select count(user_id) from user_checkin";
			 $result3 = mysqli_query($link,$query);
			 $result4 = mysqli_query($link,$query2);
			?>
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			     <?php
    	while($row = mysqli_fetch_array($result4)) {
    		 echo "<th scope='col'>" . $row['team_name'] . "</th>";
    	}

      ?>
			    </tr>
			  </thead>
			  <tbody>
			    <?php
			     while($row = mysqli_fetch_array($result3)){
			         echo "<tr>";
			         echo "<td>" . $row['user_fullname'] . "</td>";
			         echo "</tr>";
			     }
			    ?>
			    
</table>

				<?php 
			$query2 = "select * from team where teams_id = 5";		
			 $query = "select * from gm_bball c inner join user_checkin uc on c.user_id = uc.user_id where team_id = 5";
			 //$count = "select count(user_id) from user_checkin";
			 $result3 = mysqli_query($link,$query);
			 $result4 = mysqli_query($link,$query2);
			?>
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			     <?php
    	while($row = mysqli_fetch_array($result4)) {
    		 echo "<th scope='col'>" . $row['team_name'] . "</th>";
    	}

      ?>
			    </tr>
			  </thead>
			  <tbody>
			    <?php
			     while($row = mysqli_fetch_array($result3)){
			         echo "<tr>";
			         echo "<td>" . $row['user_fullname'] . "</td>";
			         echo "</tr>";
			     }
			    ?>
			    
</table>

				
		</div>	
	</div>
</div>
