<?php
 $name = $_POST['name'];
 $phone = $_POST['phone'];

$subject = "=?utf-8?B?".base64_encode("Сообщение с сайта")."?=";
$headers = "From: $name\r\nContent-type: $phone; charset=utf-8\r\n";

 $success = mail("your mail", $subject, $phone, $headers);
 echo $success;
?>
