<?php
$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
$mess = trim(filter_var($_POST['mess'], FILTER_SANITIZE_STRING));


$error = '';

if(strlen($username) <= 3)
    $error = 'Введите имя';
else if(strlen($mess) <= 3)
    $error = 'Введите message';  
 
 
if($error != ''){
    echo $error;
    exit();
}    

$email = "taksa4060@gmail.com";
$my_mail = "hilesve1@gmail.com";
$subject = "=?utf-8?B?".base64_encode("Новое сообщение с сайта")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

mail($my_mail, $subject, $mess, $headers);
echo 'OK';