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
<style type="text/css">
  /*
 *  Flex Layout Specifics
*/
main{
  display:flex;
  flex-direction:row;
}
.round{
  display:flex;
  flex-direction:column;
  justify-content:center;
  width:200px;
  list-style:none;
  padding:0;
}
  .round .spacer{ flex-grow:1; }
  .round .spacer:first-child,
  .round .spacer:last-child{ flex-grow:.5; }

  .round .game-spacer{
    flex-grow:1;
  }

/*
 *  General Styles
*/
body{
  font-family:sans-serif;
  font-size:small;
  padding:10px;
  line-height:1.4em;
}

li.game{
  padding-left:20px;
}

  li.game.winner{
    font-weight:bold;
  }
  li.game span{
    float:right;
    margin-right:5px;
  }

  li.game-top{ border-bottom:1px solid #aaa; }

  li.game-spacer{ 
    border-right:1px solid #aaa;
    min-height:40px;
  }

  li.game-bottom{ 
    border-top:1px solid #aaa;
  }
</style>
 <h1>2013 NCAA Tournament - Midwest Bracket</h1>
<main id="tournament">
    <ul class="round round-1">
        <li class="spacer">&nbsp;</li>
        
        <li class="game game-top winner">Lousville <span>79</span></li>
        <li class="game game-spacer">&nbsp;</li>
        <li class="game game-bottom ">NC A&T <span>48</span></li>

        <li class="spacer">&nbsp;</li>
        
        <li class="game game-top winner">Colo St <span>84</span></li>
        <li class="game game-spacer">&nbsp;</li>
        <li class="game game-bottom ">Missouri <span>72</span></li>

                <li class="spacer">&nbsp;</li>
        
        <li class="game game-top winner">Colo St <span>84</span></li>
        <li class="game game-spacer">&nbsp;</li>
        <li class="game game-bottom ">Missouri <span>72</span></li>
    </ul>
    <ul class="round round-2">
        <li class="spacer">&nbsp;</li>
        
        <li class="game game-top winner">Lousville <span>82</span></li>
        <li class="game game-spacer">&nbsp;</li>
        <li class="game game-bottom ">Colo St <span>56</span></li>

        
        <li class="game game-top winner">Oregon <span>74</span></li>
        <li class="game game-spacer">&nbsp;</li>
        <li class="game game-bottom ">Saint Louis <span>57</span></li>

        <li class="spacer">&nbsp;</li>

        
    </ul>
    <ul class="round round-3">
        <li class="spacer">&nbsp;</li>
        
        <li class="game game-top winner">Lousville <span>77</span></li>
        <li class="game game-spacer">&nbsp;</li>
        <li class="game game-bottom ">Oregon <span>69</span></li>

        <li class="spacer">&nbsp;</li>
        
        <li class="game game-top ">Mich St <span>61</span></li>
        <li class="game game-spacer">&nbsp;</li>
        <li class="game game-bottom winner">Duke <span>71</span></li>

        <li class="spacer">&nbsp;</li>
    </ul>
    <ul class="round round-4">
        <li class="spacer">&nbsp;</li>
        
        <li class="game game-top winner">Lousville <span>85</span></li>
        <li class="game game-spacer">&nbsp;</li>
        <li class="game game-bottom ">Duke <span>63</span></li>
        
        <li class="spacer">&nbsp;</li>
    </ul>       
</main>