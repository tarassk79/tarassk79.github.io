<?php

$recepient = "youmail@ya.ru";
$sitename = "Назва сайту";

$name = trim($_GET["name"]);
$phone = trim($_GET["phone"]);
$text = trim($_GET["text"]);

$pagetitle = "Нова заявка з сайта \"$sitename\"";
$message = "Імя: $name \nТелефон: $phone \nТекст: $text";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");