<?php

include "config.php";

if(!empty($_POST['username']))
{
    $username = $_POST['username'];
    $sql_statement = "DELETE FROM free_account WHERE username = '$username'";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>