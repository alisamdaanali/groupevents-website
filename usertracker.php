<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
include('header.php');
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

<div class = "col-sm-12">
    <div class="jumbotron">  
    <h1 align="center">User Managment</h1>    
</div>

<form method="post" action="usertracker.php" align="center"> 
<input class="btn btn-Primary" type="submit" value="Update Leaderboard" name="updatelb"></input>
</form>




<?php
include('config.php');
$query = "Select * From user_checkin";
$result = mysqli_query($link,$query);

?>
<div class='container'>
<table class="table">
  <thead class="thead-dark">

  
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Manage</th>
    </tr>
  </thead>
  <tbody>

  <?php
  while($row = mysqli_fetch_array($result)){
    echo '<tr>';
      echo '<td>' . $row['user_id'] . '</td>';
      echo '<td>' . $row['user_fullname'] . '</td>';
      echo '<td>' . $row['user_phonenumber'] . '</td>';
      echo "<td><form action= 'usertracker.php' method='post'> <input class='btn btn-danger' type='submit' value='Delete' name='delete' onclick='return confirm('Are you sure?')'></input></td>";
      echo "<input type='hidden' id='user_id' name='user_id' value= '" . $row['user_id'] . "'></form></input>";
      echo '</tr>';
  }
      ?>
      </tbody>
      </table>
      </div>

      <?php


if(isset($_POST['delete']))
{

    $user_id = $_POST['user_id'];
    $query = "delete from user_checkin where user_id = $user_id ";
    $result = mysqli_query($link,$query);
    echo("<meta http-equiv='refresh' content='1'>");
}

if(isset($_POST['updatelb']))
{

    $querylb = "INSERT IGNORE INTO leaderboard (user_id)
                SELECT user_id 
                FROM user_checkin";
    $finalresult = mysqli_query($link,$querylb);
    echo("<meta http-equiv='refresh' content='1'>");
}

?>