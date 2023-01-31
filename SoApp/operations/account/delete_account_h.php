<?php 

include "config.php";

?>
<h1 style="text-align: center; "> DELETE </h1>

<style>
    h1 {text-align: center}
    h1{font-size: 60px}
    a{font-size: 20px}
    form {text-align: center}
    form{font-size: 30px} 
    
    body{

        background-color: #93b6b8;

    }

</style>

<form action="delete_account.php" method="POST" style="text-align: center; ">
<select name="ids">

<?php

$sql_command = "SELECT username, nickname, age FROM all_accounts";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $username = $id_rows['username'];
        $nickname = $id_rows['nickname'];
        $age = $id_rows['age'];
        echo "<option value=$username style='text-align: center;'>". $nickname . " - " . $age . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>
