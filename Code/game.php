<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dragon Game</title>
    <link rel="stylesheet" href="DragonStyle.css" />
  </head>

  <body>
    <div class="game">
      <div class="score">Score: 0</div>
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

        include "Logining in/server.php";

        $score = $_POST["score"];
        //$score = $_POST['someValue'];
        //$score = $_GET["score"];
        //$variable = $_GET['a'];
        //$score='score';
        //$score =  "<script>document.writeln(score);</script>";
        //$score = 111;

        //echo $variable = "<script>document.write(score)</script>";

        $username = $_SESSION['username'];
        //$email = $_SESSION['email'];

        //$id = $_SESSION['id'];

        

        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);

        $row = mysqli_fetch_array($result);

        $HighestScore = $row['HighestScore'];

        /* $query = "UPDATE users SET HighestScore = '$HighestScore' WHERE username = '$username'";
        mysqli_query($db, $query); */


       if($score > $HighestScore){
          $query = "UPDATE users SET HighestScore = '$score' WHERE username = '$username'";
          mysqli_query($db, $query);
        } 
        /* else{
          $query = "UPDATE users SET HighestScore = 5 WHERE username = '$username'";
          mysqli_query($db, $query);
        } */
        


        /* $query = "SELECT username, max(HighestScore) from users group by Id order by max(HighestScore) DESC";
        $result = mysqli_query($db, $query);  */
        


        /* $query = "UPDATE users SET HighestScore = '$highestScore' WHERE username = '$username'";
        mysqli_query($db, $query); */

        /* $username = $_SESSION['username'];
        $password = $_SESSION['password'];  */

        /* $query = "INSERT INTO users (HighestScore) VALUES (12) WHERE username='mo'";
        mysqli_query($db, $query);  */

        /* $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        mysqli_query($db, $query); */

        /* $query = "INSERT INTO users (HighestScore)
                  VALUES ($score)";
        mysqli_query($db, $query); */
      ?>

      <?php
          /* include "Logining in/server.php";
          $score = $_GET["score"];
          $username = $_SESSION['username'];
          $query = "UPDATE users SET HighestScore = '$score' WHERE username = '$username'";
          mysqli_query($db, $query); */
      ?>
      
      
  </body>
</html>
