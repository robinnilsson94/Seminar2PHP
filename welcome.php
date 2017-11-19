<?php
session_start();
 
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}

  $_SESSION['loggedin'] = true;
 header("location: home.php");
  ?>
 