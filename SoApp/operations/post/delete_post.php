<?php

include "config.php";

if(!empty($_POST['postid']))
{
    $postid = $_POST['postid'];
    $sql_statement = "DELETE FROM post WHERE postid = $postid";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>