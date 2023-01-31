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

if (!empty($_POST['startage'])){ 
    $start_age = $_POST['startage'];
    $finish_age = $_POST['finishage'];
    $sql_statement = "SELECT * FROM all_accounts WHERE age>$start_age AND age<$finish_age"; 

    $result = mysqli_query($db, $sql_statement);
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
else 
{
    echo "You did not enter your start age.";
}
  
?>