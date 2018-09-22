<?php
/**
 * mForm v2.0
 * Lopulyak Oleg < ol_lo@ukr.net >
 * Created 10.02.2013 ( updated 12.09.2014 )
*/

if (!isset($_REQUEST["mf_path"]) && !isset($_REQUEST["mf_captcha_code"])) die("Restricted access");?>
<div class="exform_wrapper callback-wraper final_message">
<div class="exform_header">Спасибо за заявку!</div>
<p class="exform_addmsg"><?php echo $config->final_message;?></p>
</div>