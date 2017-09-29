<?php /* Smarty version Smarty-3.1.14, created on 2017-09-27 15:40:13
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-apps\installer\templates\actions\widgets\Widgets.html" */ ?>
<?php /*%%SmartyHeaderCode:1597659cb9c2d33cf10-43797511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f8ab1dc602d313009d8ea6923319ebc59d29885' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-apps\\installer\\templates\\actions\\widgets\\Widgets.html',
      1 => 1452774829,
      2 => 'file',
    ),
    '0e24547d1b1be15b5a178d5268ab7b77376131ce' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-apps\\installer\\templates\\actions\\widgets\\Widgets.include.html',
      1 => 1452774829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1597659cb9c2d33cf10-43797511',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'messages' => 0,
    'message' => 0,
    'slug' => 0,
    'key' => 0,
    'apps' => 0,
    'widget' => 0,
    'sort' => 0,
    '_sort' => 0,
    '_widget' => 0,
    '_widgets' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59cb9c2d5f44b4_86921722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cb9c2d5f44b4_86921722')) {function content_59cb9c2d5f44b4_86921722($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['messages']->value)){?>
    <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
        <div class="block double-padded i-message-<?php echo $_smarty_tpl->tpl_vars['message']->value['result'];?>
">
            <?php if ($_smarty_tpl->tpl_vars['message']->value['result']=='success'){?><i class="icon16 yes"></i>
            <?php }elseif($_smarty_tpl->tpl_vars['message']->value['result']=='fail'){?>
            <i class="icon16 no"></i>
            <?php }?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['text'], ENT_QUOTES, 'UTF-8', true);?>

        </div>
    <?php } ?>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['slug']->value)){?>
    <?php $_smarty_tpl->tpl_vars['sort'] = new Smarty_variable(1000, null, 0);?><?php $_smarty_tpl->tpl_vars['_widgets'] = new Smarty_variable(array(), null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slug']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value){
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
        <?php if (!empty($_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->tpl_vars['key']->value])&&!empty($_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->tpl_vars['key']->value]['widgets'])){?>
        <?php  $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widget']->_loop = false;
 $_smarty_tpl->tpl_vars['widget_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->tpl_vars['key']->value]['widgets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->key => $_smarty_tpl->tpl_vars['widget']->value){
$_smarty_tpl->tpl_vars['widget']->_loop = true;
 $_smarty_tpl->tpl_vars['widget_id']->value = $_smarty_tpl->tpl_vars['widget']->key;
?>
        <?php if (!isset($_smarty_tpl->tpl_vars['widget']->value['sort'])){?><?php $_smarty_tpl->tpl_vars['sort'] = new Smarty_variable($_smarty_tpl->tpl_vars['sort']->value+1, null, 0);?><?php $_smarty_tpl->createLocalArrayVariable('widget', null, 0);
$_smarty_tpl->tpl_vars['widget']->value['sort'] = $_smarty_tpl->tpl_vars['sort']->value;?><?php }?>
        <?php $_smarty_tpl->tpl_vars['_sort'] = new Smarty_variable($_smarty_tpl->tpl_vars['widget']->value['sort'], null, 0);?>

        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "_widget", null); ob_start(); ?>
        <li<?php if (!empty($_smarty_tpl->tpl_vars['widget']->value['installed'])){?> class="i-installed"<?php }?> data-sort="<?php echo $_smarty_tpl->tpl_vars['_sort']->value;?>
">
            <?php $_smarty_tpl->tpl_vars['app'] = new Smarty_variable($_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->tpl_vars['key']->value], null, 0);?>

            <?php /*  Call merged included template "./Widgets.include.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./Widgets.include.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1597659cb9c2d33cf10-43797511');
content_59cb9c2d446950_96445121($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./Widgets.include.html" */?>

        </li>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php $_smarty_tpl->createLocalArrayVariable('_widgets', null, 0);
$_smarty_tpl->tpl_vars['_widgets']->value[$_smarty_tpl->tpl_vars['_sort']->value] = $_smarty_tpl->tpl_vars['_widget']->value;?>
      <?php } ?>
        <?php }?>
    <?php } ?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['_widgets']->value)){?>
    <br>
    <ul class="thumbs">

        <!-- <?php echo ksort($_smarty_tpl->tpl_vars['_widgets']->value);?>
 -->

        <?php echo implode('',$_smarty_tpl->tpl_vars['_widgets']->value);?>


     </ul>
<?php }else{ ?>
    <p class="align-center gray"><br>Виджеты не найдены.</p>
<?php }?>
<div class="clear"></div>

<script type="text/javascript">
<!--
    $.layout.window.setTitle('<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr(("Виджеты").(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
//-->
</script><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2017-09-27 15:40:13
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-apps\installer\templates\actions\widgets\Widgets.include.html" */ ?>
<?php if ($_valid && !is_callable('content_59cb9c2d446950_96445121')) {function content_59cb9c2d446950_96445121($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-system\\vendors\\smarty3\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_wa_datetime')) include 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-system/vendors/smarty-plugins\\modifier.wa_datetime.php';
?><div class="profile image96px">
    <div class="image">
        <a href="#/widgets/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
/" data-href="#/widgets%query%/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
/" class="js-item-link">
            <div class="i-image-wrapper">
                <img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['widget']->value['icon'])===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['wa_url']->value)."wa-apps/installer/img/dummy-widget.png" : $tmp);?>
" alt="<?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['widget']->value['name'],15), ENT_QUOTES, 'UTF-8', true);?>
">
                <?php if (empty($_smarty_tpl->tpl_vars['hide_product_badge']->value)){?>
                <?php if (!empty($_smarty_tpl->tpl_vars['widget']->value['publish_datetime'])&&strtotime($_smarty_tpl->tpl_vars['widget']->value['publish_datetime'])>time()-86400*14){?>
                    <!-- NEW -->
                    <div class="i-badge new"><span>New</span></div>
                <?php }elseif(!empty($_smarty_tpl->tpl_vars['widget']->value['tags'])){?>
                    <?php if (in_array('featured',$_smarty_tpl->tpl_vars['widget']->value['tags'])){?>
                        <!-- FEATURED -->
                        <div class="i-badge featured"><i class="thumb-up"></i></div>
                    <?php }elseif(in_array('updated',$_smarty_tpl->tpl_vars['widget']->value['tags'])){?>
                        <!-- UPDATED -->
                        <div class="i-badge updated two-lines"><span>Новая версия</span></div>
                    <?php }?>
                <?php }?>
                <?php }?>
            </div>
        </a>
    </div>
    <div class="details">
        <h5><a href="#/widgets/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
/" data-href="#/widgets%query%/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
/" class="js-item-link"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['widget']->value['name'],32), ENT_QUOTES, 'UTF-8', true);?>
</a></h5>
        <?php if ($_smarty_tpl->tpl_vars['widget']->value['description']){?><p><?php echo $_smarty_tpl->tpl_vars['widget']->value['description'];?>
</p><?php }?>
        <?php if (empty($_smarty_tpl->tpl_vars['widget']->value['installed'])){?>

            

            <?php if (empty($_smarty_tpl->tpl_vars['widget']->value['price'])){?>
                <strong>Бесплатно</strong>
            <?php }else{ ?>
                <?php if (ifempty($_smarty_tpl->tpl_vars['widget']->value['lease_price'])=='free'){?>
                    
                    <strong>Бесплатно</strong>
                <?php }else{ ?>
                    <div class="i-pricing">
                    <?php if (!empty($_smarty_tpl->tpl_vars['widget']->value['compare_price'])){?><strike class="bold gray"><?php echo $_smarty_tpl->tpl_vars['widget']->value['compare_price'];?>
</strike>&nbsp; <?php }?>
                    <strong<?php if (!empty($_smarty_tpl->tpl_vars['widget']->value['compare_price'])){?> class="discounted"<?php }?>><?php echo $_smarty_tpl->tpl_vars['widget']->value['price'];?>
</strong>
                    <?php if (!empty($_smarty_tpl->tpl_vars['widget']->value['lease_price'])){?>
                        или <strong><?php echo sprintf('%s/мес.',$_smarty_tpl->tpl_vars['widget']->value['lease_price']);?>
</strong>
                    <?php }?>
                    </div>
                <?php }?>
            <?php }?>

        <?php }else{ ?>

            

            <?php if ($_smarty_tpl->tpl_vars['widget']->value['commercial']){?>
                
                <?php if (empty($_smarty_tpl->tpl_vars['widget']->value['purchased'])){?>
                    
                    <em class="i-installed-label not-licensed<?php if (installerHelper::overdue()){?> overdue<?php }?>"><i class="icon10 <?php if (installerHelper::overdue()){?>no<?php }else{ ?>no-bw<?php }?>"></i> Нет лицензии</em>
                <?php }else{ ?>
                    
                    <?php if (!empty($_smarty_tpl->tpl_vars['widget']->value['license_expire'])){?>
                        <?php if ((strtotime($_smarty_tpl->tpl_vars['widget']->value['license_expire'])<time())){?><?php $_smarty_tpl->tpl_vars['_overdue'] = new Smarty_variable(1, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_overdue'] = new Smarty_variable(0, null, 0);?><?php }?>
                        <em class="i-installed-label<?php if ($_smarty_tpl->tpl_vars['_overdue']->value){?> overdue<?php }?>"><i class="icon10 <?php if ($_smarty_tpl->tpl_vars['_overdue']->value){?>no<?php }else{ ?>yes<?php }?>"></i> <?php echo sprintf('Арендовано до %s',smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['widget']->value['license_expire'],'humandate'));?>
</em>
                    <?php }else{ ?>
                        <em class="i-installed-label licensed"><i class="icon10 yes"></i> Лицензия</em>
                    <?php }?>
                <?php }?>
            <?php }else{ ?>
                
                <em class="i-installed-label"><i class="icon10 yes"></i> Установлено</em>
            <?php }?>

        <?php }?>
    </div>
</div>
<?php }} ?>