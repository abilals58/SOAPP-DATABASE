<html>

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


$myBool = FALSE;

if (!empty($_POST['username'])){ 
    $username = $_POST['username']; 
    
    $pass = $_POST['pass'];
    
    $sql_statement = "SELECT username,pass FROM all_accounts"; 
    $result = mysqli_query($db, $sql_statement);

    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        if ($username == $row['username'] && $pass == $row['pass'])
        {
            $myBool = TRUE;
        }
    }
    
    if ($myBool == TRUE)
    {
        
        echo "<br><p style='text-align:center;'>Successfully logged in as $username.</p>";
        
        
        echo "<p style='text-align:center;'>Please select an account.</p>";

        $loginned = $username;
        
        $mysqltime = date ('Y-m-d H:i:s'); 

        $sql_command2 = "INSERT INTO login_(username, appid, logintime) VALUES ('$loginned',2023,'$mysqltime')";

        $myresult2 = mysqli_query($db, $sql_command2);
        
        ?>
        <form action="block.php" method="POST">
            <input type="hidden" name="loginnedUser" value="<?=$username?>">
        
        <select name="ids">

        <?php

        $sql_command = "SELECT username, nickname, age FROM all_accounts WHERE username != '$loginned'";

        $myresult = mysqli_query($db, $sql_command);

            while($id_rows = mysqli_fetch_assoc($myresult))
            {
                $username = $id_rows['username'];
                
                echo "<option value=$username>". $username . "</option>";
            }

        ?>

        </select>
        <button>BLOCK</button>
        </form>

       <!-- -->

       
        <form action="follow.php" method="POST">
            <input type="hidden" name="loginnedUser" value="<?=$loginned?>">
        
        <select name="ids">

        <?php

        $sql_command = "SELECT username, nickname, age FROM all_accounts WHERE username != '$loginned'";

        $myresult = mysqli_query($db, $sql_command);

            while($id_rows = mysqli_fetch_assoc($myresult))
            {
                $username = $id_rows['username'];
                
                echo "<option value=$username>". $username . "</option>";
            }

        ?>

        </select>
        <button>FOLLOW</button>
        </form>
        

        <!-- -->


        <?php 

        
    }

    if ($myBool == FALSE)
    {
        echo "<br><br><br><p style='text-align:center;'>Wrong username or password.</p>";
    }
} 
else 
{
    echo "You did not enter your name.";
}
?>


</html>
