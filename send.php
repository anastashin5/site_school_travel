<?php

$name = trim(htmlspecialchars($_POST['name']));
$phone = trim(htmlspecialchars($_POST['phone']));
$email_address = trim(htmlspecialchars($_POST['email_address']));

$email = "admin@travel-agent.by";
$to = "Anastashin@list.ru";
$subject = "Регистрация на курс";

$message = '
    <b>Заявка</b><br>
    <p>Имя клиента: '.$name.'</p>
    <p>Телефон клиента: '.$phone.'</p>
    <p>Электронный адрес: '.$email_address.'</p>';

$headers = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$addparams = "-f $email";
mail($to, $subject, $message, $headers, $addparams);
?>
