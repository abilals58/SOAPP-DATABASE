<?php

include "config.php";

if(!empty($_POST['pid']))
{
    $pid = $_POST['pid'];
    $sql_statement = "DELETE FROM profile_ WHERE profileid = $pid";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>