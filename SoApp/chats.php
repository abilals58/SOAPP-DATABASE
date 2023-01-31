<?php

    

    header("refresh: 60");

    function send_msg($msg, $name, $time) {
        $URL = "https://cs-306-project-c209f-default-rtdb.firebaseio.com/Chats.json";
        $ch = curl_init();
        $msg_json = new stdClass();
        $msg_json->msg = $msg;
        
        $msg_json->name = $name;
        
        $msg_json->time = date('H:i');

        $encoded_json_obj = json_encode($msg_json);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt_array($ch, array(CURLOPT_URL => $URL,
                                    CURLOPT_POST => TRUE,
                                    CURLOPT_RETURNTRANSFER => TRUE,
                                    CURLOPT_HTTPHEADER => array('Content-Type: application/json' ),
                                    
                                    CURLOPT_POSTFIELDS => $encoded_json_obj ));
        $response = curl_exec($ch);
        return $response;
    }

    function get_messages() 
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, "https://cs-306-project-c209f-default-rtdb.firebaseio.com/Chats.json");
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result, true);
    }

    $msg_res_json = get_messages();
    
    

    if (isset($_POST['msg'])) {
        $user_msg = $_POST['msg'];
        
        send_msg($user_msg, "admin",13567);
        
    }

   

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
</head>

<div class="menu">
<div class="back"><i class="fa fa-chevron-left"></i> <img src="https://i.imgur.com/DY6gND0.png" draggable="false"/></div>
<div class="name">Support</div>
<div class="last">18:09</div>
</div>
<ol class="chat">
<?php
    $keys = array_keys($msg_res_json);
    for ($i = 0; $i < count($keys); $i++){
        $chat_msg = $msg_res_json[$keys[$i]];
        $name = $chat_msg['name'];
        $msg = $chat_msg['msg'];
        $time = $chat_msg['time'];
        if ($name == 'admin') {
            $from = 'other';
        } else {
            $from = 'self';
        }
       echo  '
       <li class="'.$from.'">
       <div class="avatar">
                <img src="https://i.imgur.com/DY6gND0.png" draggable="false"/>
            </div>
                <div class="msg">
                    <p><b>'.$name.'</b></p>
                    <p>'.$msg.'</p>
                    <time>'.$time.'</time>
                </div>
            </li>';
    }
?>
</ol>
<form name="form" action = "chats.php" method="POST">
    <input name="msg" class="textarea" type="text" placeholder="Type here!"/>
    <input type="submit" style="display: none" />
</form>