<?php

include "config.php";

if(!empty($_POST['appid']))
{
    $appid = $_POST['appid'];
    $sql_statement = "DELETE FROM app WHERE appid = $appid";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}
else 
{
    echo "You did not enter the appid.";
}
?>



