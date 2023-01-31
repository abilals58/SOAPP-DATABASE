<?php
    
    
    $choice = $_POST['ids'];

?>

<?php
    
    
    function send_msg($sendmsg, $sendname, $time) {
        $URL = "https://cs-306-project-c209f-default-rtdb.firebaseio.com/chatpage.json";

        $msg_res_json = get_messages();

        $myBool = false;

        if($msg_res_json != null)
        {
            $keys = array_keys($msg_res_json);
            $myKey;
            $maxKey = 0;
            
            for ($i = 0; $i < count($keys); $i++)
            {
                $chat_msg = $msg_res_json[$keys[$i]];
                $myKey = $keys[$i];
                
                $name = $chat_msg['name'];
                $msg = $chat_msg['msg'];
                
                if (count($msg) > $maxKey && $name == $sendname)
                {
                    $maxKey = $myKey;
                    $myBool = true;
                }
                
                
            }

            

            if ($myBool == true)
            {
                $chat_msg = $msg_res_json[$maxKey];
                
                $name = $chat_msg['name'];
                $msgString = end($chat_msg['msg']);
                
                
                parse_str($msgString, $array);
                $msgStr = $array["msg"];
                

                if($msgStr != $sendmsg)
                {
                    
                    $myName = "Support";
                    $myMessage = $sendmsg;
                    $myTime = date('H:i');

                

                    $myStr = "name=" . $myName . "&msg=" . $myMessage . "&time=" . $myTime;
                    array_push($chat_msg['msg'], $myStr);
                    
                    

                    $ch = curl_init();
                    $msg_json = new stdClass();
                    $msg_json->msg = $chat_msg['msg'];
                    
                    $msg_json->name = $sendname;
                    $msg_json->problem = $chat_msg['problem'];
                    
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
            }
            else 
            {
                $myName = $sendname;
                $myMessage = $sendmsg;
                $myTime = date('H:i');
                $myStr = "name=" . $myName . "&msg=" . $myMessage . "&time=" . $myTime;
                $myArray = array( $myStr );
                
                $ch = curl_init();
                $msg_json = new stdClass();
                $msg_json->msg = $myArray;
                
                $msg_json->name = $sendname;
                
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
        }

        

        
    }

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
    
    

    if (isset($_POST['msg'])) {
        $user_msg = $_POST['msg'];
        $choice = $_POST['ids'];
        send_msg($user_msg, $choice,13567);
        
    }

    $myCurrentTime = date('H:i');

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
</head>


<ol class="chat">
<?php
    $keys = array_keys($msg_res_json);
    $myKey;
    $maxKey = null;
    for ($i = 0; $i < count($keys); $i++)
    {
        $chat_msg = $msg_res_json[$keys[$i]];
        $myKey = $keys[$i];
        
        $name = $chat_msg['name'];
        $msg = $chat_msg['msg'];
        
        if (count($msg) > $maxKey && $name == $choice)
        {
            $maxKey = $myKey;
        }
        
        
    }

    if ($maxKey == null)
    {
        send_msg("Hello, I need help", $loginnedUser, 13567);
    }
    $msg_res_json = get_messages();
    $keys = array_keys($msg_res_json);
    $myKey;
    $maxKey = null;
    for ($i = 0; $i < count($keys); $i++)
    {
        $chat_msg = $msg_res_json[$keys[$i]];
        $myKey = $keys[$i];
        
        $name = $chat_msg['name'];
        $msg = $chat_msg['msg'];
        
        if (count($msg) > $maxKey && $name == $choice)
        {
            $maxKey = $myKey;
        }
        
        
    }

    $chat_msg = $msg_res_json[$maxKey];
    
    $name = $chat_msg['name'];
    $msg = $chat_msg['msg'];

    $selecttt = $chat_msg['problem'];
    foreach ($msg as $mymsg)
    {
        parse_str($mymsg, $array);
        $myName = $array['name'];
        $myMessage = $array['msg'];
        $myTime = $array['time'];
        if ($myName == 'admin' || $myName == 'Support' || $myName == 'support') {
            $from = 'self';
        } else {
            $from = 'other';
        }

        echo  '
        <li class="'.$from.'">
        <div class="avatar">
                    <img src="https://i.imgur.com/DY6gND0.png" draggable="false"/>
                </div>
                    <div class="msg">
                        <p><b>'.$myName.'</b></p>
                        <p>'.$myMessage.'</p>
                        <time>'.$myTime.'</time>
                    </div>
                </li>';
        
    }
    
?>
<div class="menu">
<div class="back"><i class="fa fa-chevron-left"></i> <img src="https://i.imgur.com/DY6gND0.png" draggable="false"/></div>
<div class="name"><p style = 'margin-top: 0.1em;'> <?=$choice?> /// Problem Topic: <?=$selecttt?></p></div></p></div>
<div class="last"><p style = 'margin-top: 0.25em;'><?=$myCurrentTime?></p></div>
</div>
</ol>
<form action="supportForAdmin.php" method="POST" style="text-align: center; ">
    <input type="hidden" name="ids" value="<?=$choice?>">
    

<form name="form" action = "supportForAdmin.php" method="POST">
    <input name="msg" class="textarea" type="text" placeholder="Type here!"/>
    <input type="submit" style="display: none" />
</form>

