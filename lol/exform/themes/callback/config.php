<?php
if(!isset($_REQUEST['mf_theme'])) die('Restricted access');

$config->form_addmsg = 'и мы свяжемся с вами в ближайшее время';
$config->final_message = 'Мы свяжемся с Вами в ближайшее время';
$config->form_header = 'Оставьте заявку';
$config->phone_title = 'Ваш телефон';
$config->name_title = 'Ваше имя';
$config->message_title = 'Ваше сообщение';
$config->phone_time_title = 'Удобное время для звонка';
$config->phone_time_value = 'в любое время';
$config->checbox_name = 'для отправки сообщения поставьте галочку';
//$config->enable_captcha = false;

$field_value = array_merge($field_value, array(
	'phone_time'=>'',
)); 

$field_class = $field_value;
?>