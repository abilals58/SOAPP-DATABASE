<?php 

include "config.php"; 

if (!empty($_POST['appname'])){ 
    $appname = $_POST['appname']; 
    $appid = $_POST['appid']; 
    $sql_statement = "INSERT INTO app(appname, appid) VALUES ('$appname',$appid)"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the app name.";
}

?>