<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Jumping Drake</title>
    <link rel="stylesheet" href="DragonStyle.css" />
  </head>

  <body>
    <div class="game">
      <div class="score"></div>
      <div id="lavaland"></div>
      <div id="Dragon"></div>
      <div id="Knight1"></div>
      <div id="Knight2"></div>
    </div>
    <p id="score">Score:</p>
    <span id="scoreSpan"></span>
    <p id="highScore">HI:</p>
    <span id="highSpan"></span>

    <script src="DragonScript.js"></script> 
    
    <?php
        error_reporting (E_ALL ^ E_NOTICE);
        error_reporting(E_ERROR | E_PARSE);

        include "Logining in/server.php";

        $score = $_POST["score"];
        $username = $_SESSION['username'];
        
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);

        $row = mysqli_fetch_array($result);

        $HighestScore = $row['HighestScore'];

       if($score > $HighestScore){
          $query = "UPDATE users SET HighestScore = '$score' WHERE username = '$username'";
          mysqli_query($db, $query);
        } 
      ?>

  </body>
</html>
