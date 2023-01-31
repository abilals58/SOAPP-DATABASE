<html>

<style>
    h2 {text-align: center}
    h2{font-size: 30px}
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
    
    $sql_statement = "SELECT name_,owner_id FROM owner_"; 
    $result = mysqli_query($db, $sql_statement);

    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        if ($username == $row['name_'] && $pass == $row['owner_id'])
        {
            $myBool = TRUE;
        }
    }
    
    if ($myBool == TRUE)
    {
        
        echo "<h2 style='text-align:center;'>ADVERTISE AND TAKE ADS FROM COMPANIES</h2>";
        
        echo "<p style='text-align:center;'>Please select an account.</p>";

        $loginned = $username;
        
        
        ?>
        <form action="advertise.php" method="POST">
            <input type="hidden" name="loginnedUser" value="<?=$username?>">
        
        <select name="ids">

        <?php

        $sql_command = "SELECT username FROM free_account";

        $myresult = mysqli_query($db, $sql_command);

            while($id_rows = mysqli_fetch_assoc($myresult))
            {
                $username = $id_rows['username'];
                
                echo "<option value=$username>". $username . "</option>";
            }

        ?>

        </select>
        <button>ADVERTISE</button>
        </form>

       <!-- -->

       
        <form action="take_ads_from.php" method="POST">
            <input type="hidden" name="loginnedUser" value="<?=$loginned?>">
        
        <select name="ids">

        <?php

        $sql_command2 = "SELECT company_name FROM organizations";

        $myresult2 = mysqli_query($db, $sql_command2);

            while($id_rows = mysqli_fetch_assoc($myresult2))
            {
                $company_name = $id_rows['company_name'];
                
                echo "<option value=$company_name>". $company_name . "</option>";
            }

        ?>

        </select>
        <button>TAKE ADS FROM</button>
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