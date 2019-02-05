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
    <title>Game Tracking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  

  <style>
  #myTable td 
{
    text-align: center; 
    vertical-align: middle;
}
  #myTable2 td 
{
    text-align: center; 
    vertical-align: middle;
}
</style>

</head>

<div class = "col-md-12">
    <div class="jumbotron">  
    <h1 align="center">Game Point Tracking</h1>    
</div>

<div class="container">
    <div class="row">
     <div class="col-md-6">
        <caption><h1 align="center">Cricket</h1></caption>
                <table class='table table-bordered table-dark' id="myTable">
                <?php
                include('config.php');
                $query = "select * from gm_cricket c inner join user_checkin uc on c.user_id = uc.user_id";
                $result = mysqli_query($link,$query);

                echo "<thead>";
                echo "<th> Name</th>";
                echo "<th> Current Points</th>";
                echo "<th> Add points</th>";
                echo "</thead>";


                while($row = mysqli_fetch_array($result)){
                    echo"<tr>";
                    echo"<td>" . $row['user_fullname'] . "</td>";
                    echo"<td>" . $row['user_points'] . "</td>";
                    echo"<td><form action='gametracker.php' method='post'>
                        <input type='number' name='points'></input>";
                    echo"<input type='hidden' id='user_id' name='user_id' value= '" . $row['user_id'] . "'></input>";

                    echo"<td><input id='someButton' class='tn btn-primary' type='submit' value='Update' name='updatec' ></input> </form> </td>";
                echo"</tr>";
                }

                ?>
            </table>
                </div>


<div class="col-md-6">
<caption ><h1 align="center">Basketball</h1></caption>
<table class='table table-bordered table-dark' id="myTable2">
<thead>
<th> Name</th>
<th> Current Points</th>
<th> Add points</th>
</thead>
<?php
$query = "select * from gm_bball c inner join user_checkin uc on c.user_id = uc.user_id";
$result = mysqli_query($link,$query);
while($row = mysqli_fetch_array($result)){
    echo"<tr>";
    echo"<td>" . $row['user_fullname'] . "</td>";
    echo"<td>" . $row['user_points'] . "</td>";
    echo"<td><form action='gametracker.php' method='post'>
        <input type='number' name='points'></input>";
    echo"<input type='hidden' id='user_id' name='user_id' value= '" . $row['user_id'] . "'></input>";

    echo"<td><input id='someButton' class='tn btn-primary' type='submit' value='Update' name='updateb' ></input> </form> </td>";
echo"</tr>";
}

?>



</table>
</div>
</div>
</div>


<?php
//For Cricket
if(isset($_POST['updatec']))
{
    
    $id = $_POST['user_id'];
    $newpoints = $_POST['points'];
    $query = "select user_points from gm_cricket where user_id = $id ";
    $result = mysqli_query($link,$query);

    $row = mysqli_fetch_array($result); // Use something like this to get the result
    $quantity = $row['user_points'];

    $currentpoints = $quantity;

    $updatepoints = $currentpoints + $newpoints;



        $insertq = "UPDATE gm_cricket
        SET user_points = $updatepoints
        WHERE user_id = $id;";
        $result2 = mysqli_query($link,$insertq);



         $lbcheck = "SELECT lb_user_points FROM leaderboard where user_id = $id";
        $lbresult = mysqli_query($link,$lbcheck);
        $rows = mysqli_fetch_array($lbresult);
        $lbscore = $rows['lb_user_points'];

        $lbupdatepoints = $lbscore + $updatepoints;


        $insertlb = "UPDATE leaderboard
        SET lb_user_points = $lbupdatepoints
        WHERE user_id = $id;";
        $result2 = mysqli_query($link,$insertlb);
        echo("<meta http-equiv='refresh' content='1'>");
}




?>

<?php
//For N
if(isset($_POST['updateb']))
{
    
    $id = $_POST['user_id'];
    $newpoints = $_POST['points'];
    $query = "select user_points from gm_bball where user_id = $id ";
    $result = mysqli_query($link,$query);

    $row = mysqli_fetch_array($result); // Use something like this to get the result
    $quantity = $row['user_points'];

    $currentpoints = $quantity;

    $updatepoints = $currentpoints + $newpoints;



        $insertq = "UPDATE gm_bball
        SET user_points = $updatepoints
        WHERE user_id = $id;";
        $result2 = mysqli_query($link,$insertq);


        $lbcheck = "SELECT lb_user_points FROM leaderboard where user_id = $id";
        $lbresult = mysqli_query($link,$lbcheck);
        $rows = mysqli_fetch_array($lbresult);
        $lbscore = $rows['lb_user_points'];

        $lbupdatepoints = $lbscore + $updatepoints;


        $insertlb = "UPDATE leaderboard
        SET lb_user_points = $lbupdatepoints
        WHERE user_id = $id;";
        $result2 = mysqli_query($link,$insertlb);

        echo("<meta http-equiv='refresh' content='1'>");

}




?>