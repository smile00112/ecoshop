<?php /* Smarty version Smarty-3.1.14, created on 2017-09-27 15:36:00
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-apps\site\templates\actions\backend\BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:2495459cb9b307e67b6-91003141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33fc4d83b10651bbbc9d712f4df94c3e130aa65a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-apps\\site\\templates\\actions\\backend\\BackendLoc.html',
      1 => 1506500570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2495459cb9b307e67b6-91003141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59cb9b3082ccd9_93427939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cb9b3082ccd9_93427939')) {function content_59cb9b3082ccd9_93427939($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>