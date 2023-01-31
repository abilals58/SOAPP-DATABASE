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

if (!empty($_POST['companyname'])){ 
    $companyname = $_POST['companyname'];

    $sql_statement = "SELECT * FROM organizations WHERE company_name = '$companyname'"; 
    $sql_statement1 = "SELECT * FROM nonprofit_organization WHERE company_name = '$companyname'";

    $result = mysqli_query($db, $sql_statement);
    $result1 = mysqli_query($db, $sql_statement1);
   
    echo '<table border="1" cellspacing="2" cellpadding="2" style = "text-align:center" align="center"> 
      <tr > 
          <td> <u><font face="Arial">Company Name</font></u> </td> 
          <td> <u><font face="Arial">Adress</font></u> </td> 
          <td> <u><font face="Arial">Supporters</font></u> </td>
          
      </tr>';


    while ($row = $result->fetch_assoc()) {
        $field1name = $row["company_name"];
        $field2name = $row["adress"];
        
        

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  
                   
              ';
    }
    while ($row = $result1->fetch_assoc()) {
        
        $field3name = $row["supporters"];
        

        echo '
                  
                  <td>'.$field3name.'</td> 
                   
              </tr>';
    }

} 
else 
{
    echo "You did not enter your start age.";
}

?>