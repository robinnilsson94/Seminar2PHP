<?php
  
if (isset($_POST['reviewSubmit']))
    {
         require_once 'config2.php';    
         $review = $_POST['review'];
         $username = $_POST['username'];
         $table = $_POST['table'];
         $next =  $_POST['next'];
       $sql = "INSERT INTO $table (username, review) VALUES ('$username', '$review' )";
   $result = mysqli_query($link, $sql);
    header($next);
       }
