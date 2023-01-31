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

if (!empty($_POST['appid'])){ 
    $appid = $_POST['appid'];
    $sql_statement = "SELECT * FROM app WHERE appid = $appid"; 

    $result = mysqli_query($db, $sql_statement);
  
        
        echo '<table border="1" cellspacing="2" cellpadding="2" style = "text-align:center" align="center"> 
      <tr > 
          <td> <u><font face="Arial">Appname</font></u> </td> 
          <td> <u><font face="Arial">Appid</font></u> </td> 
          
          
      </tr>';


    while ($row = $result->fetch_assoc()) {
        $field1name = $row["appname"];
        $field2name = $row["appid"];
        
        

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                   
                   
              </tr>';
    }
     
    
} 
else 
{
    echo "You did not enter the appid.";
}

?>