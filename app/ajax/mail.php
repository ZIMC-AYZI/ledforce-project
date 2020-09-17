<?php
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $start = $_POST['start'];

$subject = "=?utf-8?B?".base64_encode("Сообщение с сайта")."?=";
$headers = "From: $name\r\nContent-type: $phone , $start; charset=utf-8\r\n";

 $success = mail("your mail", $subject, $phone, $start, $headers);
 echo $success;
?>
