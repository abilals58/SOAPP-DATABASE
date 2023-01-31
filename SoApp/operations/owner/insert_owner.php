<?php 

include "config.php"; 

if (!empty($_POST['name'])){ 
    $name = $_POST['name']; 
    $surname = $_POST['surname']; 
    $ownerid = $_POST['ownerid']; 
    $sql_statement = "INSERT INTO owner_(name_, surname, owner_id) VALUES ('$name','$surname', $ownerid)"; 

    $result = mysqli_query($db, $sql_statement);
    
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the owner name.";
}

?>
