<?php 

    function get_messages() 
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, "https://cs-306-project-c209f-default-rtdb.firebaseio.com/chatpage.json");
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result, true);
    }

    $msg_res_json = get_messages();
    $keys = array_keys($msg_res_json);
    $arrayOfNames = array();
    for ($i = 0; $i < count($keys); $i++)
    {
        $chat_msg = $msg_res_json[$keys[$i]];
        
        $name = $chat_msg['name'];
        
        array_push($arrayOfNames, $name);
    }
    $arrayOfNames = array_unique($arrayOfNames);
    
?>
<h1 style="text-align: center; "> SUPPORT PAGE </h1>

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

<?php 

include "config.php";


?>

<form action="supportForAdmin.php" method="POST" style="text-align: center; ">
<select name="ids">

<?php

    foreach ($arrayOfNames as $cName) { 
    
            
            echo "<option value='$cName' style='text-align: center;'>". $cName . "</option>";
        }

?>

</select>
<button>Start Answering Problems</button>
</form>
