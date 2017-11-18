<?php
session_start();
require_once 'config2.php';
include 'insert.inc.php';
$table = "reviewTable";
 if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  $_SESSION['loggedin'] = false;
}
else {
     $_SESSION['loggedin'] = true;
      $username = $_SESSION['username']; 
      
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pancakes recipe</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
       <ul>
  <li><a href=home.php>Home</a></li>
  <li><a href=calendar.php>Calendar</a></li>
  <li style="float:right"> <a href=register.php>Register</a></li>
   <?php if($_SESSION['loggedin'] == false) {
  echo '<li style="float:right"><a href=login.php>Log in</a></li>'; 
  }
  else {
    echo '<li style="float:right"><a href=logout.php>Log out</a></li>';
  } ?>
</ul>
       <h1>Tasty Recipes</h1>
       <p id=special>A good recipe for life</p>
       <h3>Pancakes</h3>
       <p id=special2>People who likes this recipe also liked</p>
       <img id=pan src="pancakes.jpg" alt="Pancakes">
       <a href="Meatballs.php">
            <img id= balls src="meatballs.jpg" alt="Meatballs" style="width:275px;height:242px;border:0;">
        </a>
       <span> </span>
       <h3>Ingredients</h3>
        <p>
           1 1/2 cups all-purpose flour
        <p>
            3 1/2 teaspoons baking powder
        <p> 
            1 teaspoon salt 
        <p>    
            1 tablespoon white sugar
        <p> 
            1 1/4 cups milk 
        <p>    
            1 egg
        <p>    
            3 tablespoons butter, melted
        </p>
          <span> </span>
        <h3>Directions</h3>
        <p>
            1. Heat oven to 400°F. Line 13x9-inch pan with foil; spray with cooking spray.
            
        <p>
            2. In large bowl, mix all ingredients. Shape mixture into 20 to 24 (1 1/2-inch) meatballs. Place 1 inch apart in pan.
        <p>
            3. Bake uncovered 18 to 22 minutes or until no longer pink in center.
        </p>
          <span> </span>
        <h3>Reviews</h3>
           <?php if($_SESSION['loggedin'] == false) {
  echo   '<div>
           Log in to review the recipe. 
        </div>'; 
  }
  else {
      echo
        "<form  method = 'POST' action = '".setComment($link, $username, $table)."'>
        <p> Write your review here: </p>  <textarea rows = '10' cols = '30' name = 'review'></textarea><br/>
       <button type = 'submit' name = 'reviewSubmit'> Post </button>
        </form>";
    }
  ?>
    
          <span> </span>   
         <?php
    if($_SESSION['loggedin'] == false) {
  echo   getComments($link, $table);           
  }
 else {
     echo userGetComments($link, $username, $table);    
 }
 mysqli_close($link);
?>  
       
        
    </body>
</html>

