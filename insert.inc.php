<?php
function setComment($link, $username, $table){
    if (isset($_POST['reviewSubmit']))
    {
        $review = $_POST['review'];
       $sql = "INSERT INTO $table (username, review) VALUES ('$username', '$review' )";
   $result = mysqli_query($link, $sql);
       }
}

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

function userGetComments($link, $username, $table){
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
    echo "<form method = 'POST' action = '".deleteReview($link, $table)."'> <input type= 'hidden' name = 'id' value='".$row['id']."'> <button name = 'delete'>Delete </button> </form>";
  echo "</div>";
    }
       
    }
}


function deleteReview($link, $table){
    if (isset($_POST['delete']))
    {
        $id= $_POST['id'];
       $sql = "DELETE FROM $table WHERE id='$id'";
    $result = mysqli_query($link, $sql);
    header("Refresh:0");
       }
}