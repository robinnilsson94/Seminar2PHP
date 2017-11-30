<?php

 if (isset($_POST['delete']))
    {
       require_once 'config2.php';    
         $table = $_POST['table'];
         $next =  $_POST['next'];
     $id= $_POST['id'];
       $sql = "DELETE FROM $table WHERE id='$id'";
    $result = mysqli_query($link, $sql);
    header($next);
       }
