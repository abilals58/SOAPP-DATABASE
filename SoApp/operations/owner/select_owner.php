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

if (!empty($_POST['ownerid'])){ 
    $ownerid = $_POST['ownerid'];

    $sql_statement = "SELECT * FROM owner_ WHERE owner_id = $ownerid"; 

    $result = mysqli_query($db, $sql_statement);
    echo '<table border="1" cellspacing="2" cellpadding="2" style = "text-align:center" align="center"> 
      <tr > 
          <td> <u><font face="Arial">Name</font></u> </td> 
          <td> <u><font face="Arial">Surname</font></u> </td> 
          <td> <u><font face="Arial">Owner ID</font></u> </td>
          
      </tr>';


    while ($row = $result->fetch_assoc()) {
        $field1name = $row["name_"];
        $field2name = $row["surname"];
        $field3name = $row["owner_id"];
        

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                   
              </tr>';
    }
    
} 
else 
{
    echo "You did not enter your start age.";
}

?>