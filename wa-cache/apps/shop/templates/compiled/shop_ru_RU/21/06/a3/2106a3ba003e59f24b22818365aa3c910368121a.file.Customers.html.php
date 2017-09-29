<?php /* Smarty version Smarty-3.1.14, created on 2017-09-28 17:16:37
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-apps\shop\templates\actions\customers\Customers.html" */ ?>
<?php /*%%SmartyHeaderCode:1987359cd0445ceca02-63524201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2106a3ba003e59f24b22818365aa3c910368121a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-apps\\shop\\templates\\actions\\customers\\Customers.html',
      1 => 1506500542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1987359cd0445ceca02-63524201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59cd0445d79422_99590591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cd0445d79422_99590591')) {function content_59cd0445d79422_99590591($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_action')) include 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-system/vendors/smarty-plugins\\function.wa_action.php';
?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/customers.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/lazy.load.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<div class="sidebar left200px s-inner-sidebar" id="s-sidebar">
    <?php echo smarty_function_wa_action(array('app'=>"shop",'module'=>"customers",'action'=>"sidebar"),$_smarty_tpl);?>

</div>

<div class="content left200px blank" id="s-content">
    <div class="block triple-padded"><i class="icon16 loading"></i>Загрузка...</div>
</div>

<script>$(function() { "use strict";
    $.customers.init();
});</script>

<?php }} ?>