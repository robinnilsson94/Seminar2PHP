<?php
$link = mysqli_connect("localhost", "root", "", "reviewDB");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "CREATE TABLE reviewTable(
     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    review TEXT NOT NULL  
)";
if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Was not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>