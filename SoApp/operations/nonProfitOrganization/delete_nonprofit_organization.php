<?php

include "config.php";

if(!empty($_POST['companyname']))
{
    $companyname = $_POST['companyname'];
    $sql_statement = "DELETE FROM nonprofit_organization WHERE company_name = '$companyname'";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>