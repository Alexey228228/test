<?php
  $to = "leha.zelenov.03@mail.ru";
  $subject = "Robot - Робот";
  $message = "Hello World!<br /><i>Это письмо отправлено <b>роботом</b>
  и отвечать на него не нужно!</i>";
  $headers = "From: MyRusakov.ru <leha.zelenov.03@mail.ru>\r\nContent-type: text/html; charset=windows-1251 \r\n";
  mail ($to, $subject, $message, $headers);
?>