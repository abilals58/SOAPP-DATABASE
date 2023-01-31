<?php 

include "config.php"; 

if (!empty($_POST['storyid'])){ 
    $storyid = $_POST['storyid']; 
    $text = $_POST['text_']; 
    $time = $_POST['time_'];

    $sql_statement = "INSERT INTO story(storyid, text_, time_) VALUES ($storyid,'$text', '$time')"; 

    $result = mysqli_query($db, $sql_statement);
    
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the story id.";
}

?>
