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

if (!empty($_POST['storyid'])){ 
    $storyid = $_POST['storyid'];

    $sql_statement = "SELECT * FROM story WHERE storyid = $storyid"; 

    $result = mysqli_query($db, $sql_statement);
    echo '<table border="1" cellspacing="2" cellpadding="2" style = "text-align:center" align="center"> 
    <tr > 
        <td> <u><font face="Arial">Story ID</font></u> </td> 
        <td> <u><font face="Arial">Text</font></u> </td> 
        <td> <u><font face="Arial">Time</font></u> </td>
        
    </tr>';


  while ($row = $result->fetch_assoc()) {
      $field1name = $row["storyid"];
      $field2name = $row["text_"];
      $field3name = $row["time_"];
      

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