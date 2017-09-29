<?php /* Smarty version Smarty-3.1.14, created on 2017-09-28 16:49:58
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-apps\shop\templates\actions\backend\BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:2280459ccfe065e9c44-39007839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08a7c337b83483466f9c10f23b1e59d4c03fcd20' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-apps\\shop\\templates\\actions\\backend\\BackendLoc.html',
      1 => 1506500542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2280459ccfe065e9c44-39007839',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59ccfe0662c2d3_19422519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ccfe0662c2d3_19422519')) {function content_59ccfe0662c2d3_19422519($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>