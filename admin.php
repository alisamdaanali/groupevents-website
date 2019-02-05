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
  <title>admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<style>
.vl {
    border-left: 6px solid green;
    height: 100px;
}

.container {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr; /* fraction*/
}
</style>


<div class = "col-sm-12">
    <div class="jumbotron">  
    <h1 align="center">Team Assigment</h1>    
</div>


<div align="center">
<h5><b><u>Cricket</u></b></h5>
<form action="admin.php" method="post"> 
  <div class="form-group">
  <input id="someButton" class="btn btn-primary btn-lg" type="submit" value="Randomize Teams" name="randteam" > </input>
  </div>
</form>
</div>


<?php 
 include('config.php');
 $query = "select * from gm_cricket c inner join user_checkin uc on c.user_id = uc.user_id where team_id = 1";
 //$count = "select count(user_id) from user_checkin";
 $result3 = mysqli_query($link,$query);
?>

<div class='container'>
<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Team 1</th>
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


<div></div>


<?php 
 $query = "select * from gm_cricket c inner join user_checkin uc on c.user_id = uc.user_id where team_id = 2";
 //$count = "select count(user_id) from user_checkin";
 $result4 = mysqli_query($link,$query);
?>
<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Team 2</th>
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
</div>

<hr>

<div align="center">
<h5><b><u>Basketball</u></b></h5>
<form action="admin.php" method="post"> 
  <div class="form-group">
  <!-- <select class=" col-xs-2" id="inputGroupSelect01" name="teams">
  <option selected>Choose the Number of Teams...</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  </select> -->
  <input id="someButton" class="btn btn-primary btn-lg" type="submit" value="Randomize Teams" name="randteamb" > </input>
  </div>
</form>
</div>


<?php 

 $query = "select * from gm_bball c inner join user_checkin uc on c.user_id = uc.user_id where team_id = 1";
 //$count = "select count(user_id) from user_checkin";
 $result3 = mysqli_query($link,$query);
?>
<div class='container'>
<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Team 1</th>
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


<div></div>


<?php 
 $query = "select * from gm_bball c inner join user_checkin uc on c.user_id = uc.user_id where team_id = 2";
 //$count = "select count(user_id) from user_checkin";
 $result4 = mysqli_query($link,$query);
?>
<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Team 2</th>
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
</div>

<div></div>
<?php 

 $query = "select * from gm_bball c inner join user_checkin uc on c.user_id = uc.user_id where team_id = 3";
 //$count = "select count(user_id) from user_checkin";
 $result3 = mysqli_query($link,$query);
?>
<div class='container'>
<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Team 3</th>
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


<div></div>


<?php 
 $query = "select * from gm_bball c inner join user_checkin uc on c.user_id = uc.user_id where team_id = 4";
 //$count = "select count(user_id) from user_checkin";
 $result4 = mysqli_query($link,$query);
?>
<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Team 4</th>
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

<?php 
 $query = "select * from gm_bball c inner join user_checkin uc on c.user_id = uc.user_id where team_id = 5";
 //$count = "select count(user_id) from user_checkin";
 $result4 = mysqli_query($link,$query);
?>
<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Team 5</th>
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
</div>
</div>

<?php

//For Cricket
if(isset($_POST['randteam']))
{
    
    $query = "select user_id from user_checkin";
    //$count = "select count(user_id) from user_checkin";
    $result = mysqli_query($link,$query);
    $rows1 = mysqli_num_rows($result);
    $perteam = $rows1/2;

    $team = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
    //$team = array(1,2,3,4);
    shuffle($team);

    $queryDel = "TRUNCATE TABLE gm_cricket";
    $clearResult = mysqli_query($link,$queryDel);

while (($element = array_pop($team)) && ($row = mysqli_fetch_array($result))){

  // $num = $element;
  //$user_id = $row['user_id'];
  // if(empty($team)){
  //   $team = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
  // }



    if ($element % 2 == 0){
        $num = 1;
    }else{
        $num =2;
    }
        
     $user_id = $row['user_id'];
    //    $num = rand(1,2);
        
    //     if($num == '1'){
    //         $teamone++;
    //         if(@$teamone > $team1)
    //         {
    //             $num = rand(2,2);
    //         }
    //     }

    //     else if($num == '2'){
    //         $teamtwo++;
    //         if(@$teamtwo > $team2)
    //         {
    //             $num = rand(1,1);
    //         }
    //     }

        $insertq = "Insert into gm_cricket (user_id, team_id)
        VALUES ($user_id, $num)";
        $result2 = mysqli_query($link,$insertq);
        echo("<meta http-equiv='refresh' content='1'>");
}


}



//Basketball
if(isset($_POST['randteamb']))
{
    
    //$numberofteams = $_POST['teams'];
    $queryb = "select user_id from user_checkin";
   
    $result = mysqli_query($link,$queryb);
    $rows1 = mysqli_num_rows($result);
    $perteam = $rows1/2;


    //if($numberofteams == 4){
    $team = array(1,2,3,4,5);
    //}
    shuffle($team);

   
    
    $queryDe = "TRUNCATE TABLE gm_bball";
    $clearResult = mysqli_query($link,$queryDe);

while (($element = array_pop($team)) && ($row = mysqli_fetch_array($result))){

    // if ($element % 2 == 0){
    //     $num = 1;
    // }else{
    //     $num =2;
    // }

    $num = $element;
    $user_id = $row['user_id'];
    if(empty($team)){
        $team = array(1,2,3,4,5);
    }


//echo $num;
 

        $insertq = "Insert into gm_bball (user_id, team_id)
        VALUES ($user_id, $num)";
        $result2 = mysqli_query($link,$insertq);
        echo("<meta http-equiv='refresh' content='1'>");
}


}
    ?>