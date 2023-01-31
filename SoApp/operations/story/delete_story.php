<?php

include "config.php";

if(!empty($_POST['storyid']))
{
    $storyid = $_POST['storyid'];
    $sql_statement = "DELETE FROM story WHERE storyid = $storyid";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>