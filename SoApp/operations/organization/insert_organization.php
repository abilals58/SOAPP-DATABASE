<?php 

include "config.php"; 

if (!empty($_POST['companyname'])){ 
    $companyname = $_POST['companyname']; 
    $adress = $_POST['adress']; 

    $sql_statement = "INSERT INTO organizations(company_name, adress) VALUES ('$companyname','$adress')"; 

    $result = mysqli_query($db, $sql_statement);
    
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter your name.";
}

?>
