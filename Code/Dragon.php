<?php
    $servername='localhost';
    $username='AQ';
    $password='AQ123456';
    $dbname = "dragon";

    $conn=mysqli_connect($servername,$username,$password,"$dbname");
    
    if(!$conn){
      die('Could not Connect MySql Server:' .mysql_error());
    }
?>