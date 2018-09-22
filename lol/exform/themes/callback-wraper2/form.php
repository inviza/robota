<?php
if(!isset($_REQUEST["mf_path"]) && !isset($_REQUEST["mf_captcha_code"])) die("Restricted access");?>
<div class="exform_wrapper callback-wraper2">
<!--  <div class="exform_header"><?php echo $config->form_header;?></div>
 <div class="exform_addmsg"><?php echo $config->form_addmsg;?></div> -->
 <form name="exform">
  <div class="inpt_wrpr">
   <div class="poz_rel"><?php if(isset($field_value["name_err"])) :?><div class="err"><img src="<?php echo $_SESSION['mf_path'];?>imgs/error.gif" title="<?php echo $field_value["name_err"];?>" /></div><?php endif;?>
   <input type="text" name="mf_name" value="" class="<?php echo $field_class["name"];?>" placeholder="<?php echo $config->name_title;?>" /></div>

  <div class="poz_rel center-block"><?php if(isset($field_value["email_err"])) :?><div class="err"><img src="<?php echo $_SESSION['mf_path'];?>imgs/error.gif" title="<?php echo $field_value["email_err"];?>" /></div><?php endif;?>
   <input type="text" name="mf_email" value=""  class="<?php echo $field_class["email"];?>" placeholder="<?php echo $config->email_title;?>" /</div>
 <div class="poz_rel"><?php if(isset($field_value["phone_err"])) :?><div class="err"><img src="<?php echo $_SESSION['mf_path'];?>imgs/error.gif" title="<?php echo $field_value["phone_err"];?>" /></div><?php endif;?>
   <input type="text" name="mf_phone" value="" class="<?php echo $field_class["phone"];?> last-item" placeholder="<?php echo $config->phone_title;?>" /></div>
	<!--input type="checkbox" id="checkBoxId">
	<label for="checkBoxId" class="lab">- <?php echo $config->checbox_name;?></label-->
   <?php if($config->enable_captcha) : ?>
  <div class="exf_captcha">
	<a href="#" title="<?php echo $config->captcha_refresh;?>" onclick="document.getElementById('mf_captcha_<?php echo $_REQUEST["mf_theme"];?>').src='<?php echo $_SESSION['mf_path'];?>captcha/securimage_show.php?' + Math.random(); return false"></a> 
    <input type="text" name="mf_captcha_code" size="10" maxlength="6" value="<?php echo $field_value["captcha"];?>"  placeholder="<?php echo $config->captcha_code;?>" class="<?php echo $field_class["captcha"];?>"/>
	<div class="captcha_img lading"><img class="brdrad7" id="mf_captcha_<?php echo $_REQUEST["mf_theme"];?>" src="<?php echo $_SESSION['mf_path'];?>captcha/securimage_show.php" alt="" /></div>
   </div>
   <div class="mf_clear"></div>
  <?php else : ?>
   <input type="hidden" name="mf_captcha_code" value="false" /> 
  <?php endif; ?>

  </div>
  <div class="mf_submit"><input type="submit" class="send_btn" value="<?php echo $config->submit_title;?>"></div>
  <input type="text" name="user_name" class="name" />
  <input type="hidden" name="mf_theme" value="<?php echo $_REQUEST["mf_theme"];?>" />
  <input type="hidden" name="send" value="yes" />
 </form>
	<div class="mf_submit"><input class="close_btn" type="button"></div>
</div> 