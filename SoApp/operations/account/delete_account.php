<?php

include "config.php";

if(!empty($_POST['ids']))
{
    $username = $_POST['ids'];
    $sql_statement = "DELETE FROM all_accounts WHERE username = '$username'";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>