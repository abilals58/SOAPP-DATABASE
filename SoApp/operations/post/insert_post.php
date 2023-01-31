<?php 

include "config.php"; 

if (!empty($_POST['postid'])){ 
    $postid = $_POST['postid']; 
    $text = $_POST['text_']; 
    $time = $_POST['time_'];

    $sql_statement = "INSERT INTO post(postid, text_, time_) VALUES ($postid,'$text', '$time')"; 

    $result = mysqli_query($db, $sql_statement);
    
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the story id.";
}

?>
