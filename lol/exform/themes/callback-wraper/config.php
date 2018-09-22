<?php
if(!isset($_REQUEST['mf_theme'])) die('Restricted access');

$config->form_addmsg = 'и узнай, на что ты способен и раскрой свой потенциал на 100%  и узнай, на что ты способен и раскрой';
$config->form_header = 'Оставьте заявку';
$config->final_message = 'Мы свяжемся с Вами в ближайшее время';
$config->phone_title = 'Введите Ваш телефон';
$config->name_title = 'Введите Ваше имя';
$config->phone_time_title = 'Удобное время для звонка';
$config->email_title = 'Введите Ваш e-mail';
$config->phone_time_value = 'в любое время';
$config->checbox_name = 'для отправки сообщения поставьте галочку';
$config->require_email = true;
//$config->enable_captcha = false;

$field_value = array_merge($field_value, array(
	'phone_time'=>'',
)); 

$field_class = $field_value;
?>