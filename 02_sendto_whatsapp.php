<?php

$arr= json_encode(array(

"phone"=>"919931504808",   // enter the number you want to send the message here. add firstly 91 becase its india code
"body" =>"write your message"    //send any message you want to write here..
));

$instanceId='83763g87x';      // paste your instanceid 
$token='777';                // paste your token number
$url="'https://api.chat-api.com/instance'.$instanceId.'/message?token='.$token;"; // paste your url id

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL.$url);
curl_setopt($ch,CURLOPT_POST.true);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
curl_setopt($ch,CURLOPT_HTTPHEADER,array(
    'Content-type:application/json',
    'content-length:'.strlen($arr)
));
$result=curl_exec($ch);
curl_close($ch);
echo $result;


?>