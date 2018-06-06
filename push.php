<?php
function Push_Msg_Monitor($msg, $hoststatus, $to_uid = '', $toast)
  {
        $push_api_url = "http://192.168.99.13:2121/";
        $post_data = array(
           'type' => 'publish',
           'content' => $msg,
           'to' => $to_uid,
           'hoststatus' => $hoststatus,
           'toast' => $toast,
        );
        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_URL, $push_api_url );
        curl_setopt ( $ch, CURLOPT_POST, 1 );
        curl_setopt ( $ch, CURLOPT_HEADER, 0 );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $post_data );
        $return = curl_exec ( $ch );
        curl_close ( $ch );
        return $return;

    }	

echo Push_Msg_Monitor("测试消息,微信消息会同步在这里显示！",'success','172.25.1.29','none');
