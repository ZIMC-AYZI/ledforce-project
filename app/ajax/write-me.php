<?php
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $mail = $_POST['mail'];
 $message = $_POST['message']

$subject = "=?utf-8?B?".base64_encode("Сообщение с сайта")."?=";
$headers = "From: $mail\r\nReply-to: $mail\r\nContent-type: $phone, text/html; charset=utf-8\r\n";

 $success = mail("your mail", $subject, $mail, $name, $phone, $message, $headers);
 echo $success;
?>
