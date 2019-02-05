<?php
include('frontheader.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Leaderboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>





<div class="container">

	<div class = "col-sm-12">
    <div class="jumbotron">  
    <h1 align="center">Leaderboard</h1>    
</div>
<div class="row">
	<div class="col-md-12">

		<?php
include('config.php');
$query = "Select * From Leaderboard l inner join user_checkin uc on uc.user_id = l.user_id ORDER BY lb_user_points DESC";
$result = mysqli_query($link,$query);
$rank = 1;

?>
		<table class="table">
  <thead class="thead-dark">

  
    <tr>
      <th scope="col">Rank</th>
      <th scope="col">Full Name</th>
      <th scope="col">Score</th>
    </tr>
  </thead>
  <tbody>

  <?php
  while($row = mysqli_fetch_array($result)){
    echo '<tr>';
      echo '<td>'. $rank .'</td>';
      echo '<td>' . $row['user_fullname'] . '</td>';
      echo '<td>' . $row['lb_user_points'] . '</td>';
      echo '</tr>';
      $rank++;
  }
      ?>
      </tbody>
      </table>
	</div>
</div>
</div>


</html>