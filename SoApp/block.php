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
    $loginnedUser = $_POST['loginnedUser'];
    
    $sql_command = "INSERT INTO blocks(account_that_blocks, account_blocked) VALUES ('$loginnedUser','$username1')";

    $myresult = mysqli_query($db, $sql_command);
    
    echo "<p style='text-align:center;'>You have successfully blocked $username1.</p>";

}

?>