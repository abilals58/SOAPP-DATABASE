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

if (!empty($_POST['pid'])){ 
    $pid = $_POST['pid'];

    $sql_statement = "SELECT * FROM profile_ WHERE profileid = $pid"; 
    $result = mysqli_query($db, $sql_statement);
    echo '<table border="1" cellspacing="2" cellpadding="2" style = "text-align:center" align="center"> 
      <tr > 
          <td> <u><font face="Arial">Profile ID</font></u> </td> 
          <td> <u><font face="Arial">About Me</font></u> </td> 
          
          
      </tr>';


    while ($row = $result->fetch_assoc()) {
        $field1name = $row["profileid"];
        $field2name = $row["aboutme"];
        
        

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                   
                   
              </tr>';
    }
    
} 
else 
{
    echo "You did not enter your start age.";
}

?>