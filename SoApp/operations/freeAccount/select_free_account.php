<h1> RESULTS </h1>

<style>
    h1 {text-align: center}
    h1{font-size: 60px}
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
    $sql_statement = "SELECT * FROM all_accounts WHERE username = '$username'"; 
    $result = mysqli_query($db, $sql_statement);

    $sql_statement2 = "SELECT * FROM free_account WHERE username = '$username'"; 
    $result2 = mysqli_query($db, $sql_statement2);

    while($row = mysqli_fetch_assoc($result2)) { // Iterating the result
        if ($username == $row['username'])
        {
            $myBool = TRUE;
        }
    }
    if ($myBool == TRUE)
    {
        echo '<table border="1" cellspacing="2" cellpadding="2" style = "text-align:center" align="center"> 
        <tr > 
            <td> <u><font face="Arial">Username</font></u> </td> 
            <td> <u><font face="Arial">Nickname</font></u> </td> 
            <td> <u><font face="Arial">Password</font></u> </td> 
            <td> <u><font face="Arial">Age</font></u> </td> 
            
        </tr>';


        while ($row = $result->fetch_assoc()) {
            $field1name = $row["username"];
            $field2name = $row["nickname"];
            $field3name = $row["pass"];
            $field4name = $row["age"];
            

            echo '<tr> 
                    <td>'.$field1name.'</td> 
                    <td>'.$field2name.'</td> 
                    <td>'.$field3name.'</td> 
                    <td>'.$field4name.'</td> 
                    
                </tr>';
        }
    }

    if ($myBool == FALSE)
    {
        echo '<h3 style = "text-align:center"> There is no free account by that username.</h3>';
    }
    
} 
else 
{
    echo "You did not enter your start age.";
}

?>