<?php 

include "config.php"; 

if (!empty($_POST['pid'])){ 

    $pid = $_POST['pid']; 
    $aboutme = $_POST['aboutme']; 

    $sql_statement = "INSERT INTO profile_(profileid, aboutme) VALUES ($pid,'$aboutme')"; 

    $result = mysqli_query($db, $sql_statement);
    
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter your name.";
}

?>
