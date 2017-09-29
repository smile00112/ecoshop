<?php /* Smarty version Smarty-3.1.14, created on 2017-09-29 11:20:04
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-data\public\site\themes\default\error.html" */ ?>
<?php /*%%SmartyHeaderCode:3180759ce02348356b0-05330238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24d291153f68dadfeea38c5c39f20c21766b1355' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-data\\public\\site\\themes\\default\\error.html',
      1 => 1506500793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3180759ce02348356b0-05330238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_code' => 0,
    'error_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59ce0234887740_63232233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ce0234887740_63232233')) {function content_59ce0234887740_63232233($_smarty_tpl) {?><h1>
	<?php if ($_smarty_tpl->tpl_vars['error_code']->value){?><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
. <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['error_message']->value){?><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<?php }else{ ?>Ошибка<?php }?>
</h1>
Запрашиваемый ресурс недоступен.
<?php }} ?>