<?php 

include "config.php"; 

if (!empty($_POST['companyname'])){ 
    $companyname = $_POST['companyname']; 
    $supporters = $_POST['supporters']; 

    $sql_statement = "INSERT INTO nonprofit_organization(company_name, supporters) VALUES ('$companyname','$supporters')"; 

    $result = mysqli_query($db, $sql_statement);
    
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter your name.";
}

?>
