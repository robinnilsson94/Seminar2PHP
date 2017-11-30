<?php

function getComments($link, $table){
    $sql = "SELECT * FROM $table";
    $result = $link->query($sql);
    while ($row = $result->fetch_assoc()){
    echo "<div>";    
        echo "<p class = username>";
        echo "Reviewer: ";    
        echo $row['username']."<br>";  
        echo "</p>";
        echo $row['review']."<br>";
    echo "</div>";
    }
}

function userGetComments($link, $username, $table, $url){
    $sql = "SELECT * FROM $table";
    $result = $link->query($sql);
    while ($row = $result->fetch_assoc()){
    if ($row['username']!= $username){
         echo "<div>";    
        echo "<p class = username>";
        echo "Reviewer: ";    
        echo $row['username']."<br>";  
        echo "</p>";
        echo $row['review']."<br>";
    echo "</div>";
    }
    else {
         echo "<div class = 'yellow'>";    
        echo "<p class = username>";
        echo "Reviewer: ";    
        echo $row['username']."<br>";  
        echo "</p>";
        echo $row['review']."<br>";
    echo "<form method = 'POST' action = 'deleteReview.php'> <input type= 'hidden' name = 'id' value='".$row['id']."'> <input type= 'hidden' name = 'next' value='$url'> <input type= 'hidden' name = 'table' value=$table> <button name = 'delete'>Delete </button> </form>";
  echo "</div>";
    }
       
    }
}
