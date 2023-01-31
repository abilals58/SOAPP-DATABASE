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
    $username1 = $_POST['ids'];
    
    $sql_command = "INSERT INTO advertise(username, appid) VALUES ('$username1', 2023)";

    $myresult = mysqli_query($db, $sql_command);
    
    echo "<br><br><p style='text-align:center;'>You have successfully advertised the account $username1.</p><br>";
    
    echo "<p style='text-align:center;'>$username1 will see advertisements in the SoAPP from now on.</p>";
}

?>