<style>
    h2 {text-align: center}
    h2{font-size: 40px}
    p{font-size: 30px}
    form {text-align: center}
    form{font-size: 30px} 
    body{

        background-color: #93b6b8;

    }

</style>
<?php

include "config.php";



if(!empty($_POST['ids']))
{
    $company_name = $_POST['ids'];
    
    $sql_command = "INSERT INTO take_ads_from(appid, company_name) VALUES (2023,'$company_name')";

    $myresult = mysqli_query($db, $sql_command);
    echo "<br><br><p style='text-align:center;'>You have made a contract to show advertisements of $company_name.</p><br>";
    
    echo "<p style='text-align:center;'>Your free-users will see advertisements of $company_name.</p>";
    
}

?>