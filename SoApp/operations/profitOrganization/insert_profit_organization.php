<?php 

include "config.php"; 

if (!empty($_POST['companyname'])){ 
    $companyname = $_POST['companyname']; 
    $stakeholders = $_POST['stakeholders']; 
    $profit = $_POST['profit'];

    $sql_statement = "INSERT INTO profit_organization(company_name, stakeholders, profit) VALUES ('$companyname','$stakeholders', $profit)"; 

    $result = mysqli_query($db, $sql_statement);
    
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the company name.";
}

?>
