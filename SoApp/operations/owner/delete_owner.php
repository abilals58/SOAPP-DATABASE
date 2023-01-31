<?php

include "config.php";

if(!empty($_POST['ownerid']))
{
    $ownerid = $_POST['ownerid'];
    $sql_statement = "DELETE FROM owner_ WHERE owner_id = $ownerid";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>