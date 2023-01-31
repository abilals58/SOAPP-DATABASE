<?php 

include "config.php"; 

if (!empty($_POST['username'])){ 
    $username = $_POST['username']; 
    $nickname = $_POST['nickname']; 
    $pass = $_POST['pass'];
    $age = $_POST['age'];
    $sql_statement = "INSERT INTO all_accounts(username, nickname, pass,age) VALUES ('$username','$nickname','$pass', $age)"; 
    $sql_statement2 = "INSERT INTO free_account(username) VALUES ('$username')";

    $result = mysqli_query($db, $sql_statement);
    $result2 = mysqli_query($db, $sql_statement2);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter your username.";
}

?>
