<?php 

include "config.php"; 

if (!empty($_POST['username'])){ 
    $username = $_POST['username']; 
    $sql_statement = "INSERT INTO free_account(username) VALUES ('$username')";

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the  username.";
}

?>
