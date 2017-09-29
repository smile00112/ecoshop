<?php /* Smarty version Smarty-3.1.14, created on 2017-09-28 09:54:30
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-apps\blog\templates\actions\blog\BlogSettings.html" */ ?>
<?php /*%%SmartyHeaderCode:1616659cc9ca67f9ec8-32552229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '371452710ac411b31c7164fe90ca570829f5dbaf' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-apps\\blog\\templates\\actions\\blog\\BlogSettings.html',
      1 => 1506500510,
      2 => 'file',
    ),
    '1cf777d95f155cdec5482403a62e1ae01f239462' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-apps\\blog\\templates\\dialogs\\blogDelete.html',
      1 => 1506500511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1616659cc9ca67f9ec8-32552229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
    'wa' => 0,
    'blogs' => 0,
    'blog_id' => 0,
    'id' => 0,
    'b' => 0,
    'blog' => 0,
    'messages' => 0,
    'domains' => 0,
    'd' => 0,
    'settlement' => 0,
    'colors' => 0,
    'color' => 0,
    'icons' => 0,
    'icon' => 0,
    'backend_blog_edit' => 0,
    'output' => 0,
    'plugin' => 0,
    'saved' => 0,
    'is_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59cc9ca6bc6a24_57727146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cc9ca6bc6a24_57727146')) {function content_59cc9ca6bc6a24_57727146($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/blogSettings.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>

<div class="b-stream b-shadowed">

    <div class="sidebar left200px b-blog-settings-inner-sidebar">
        <ul class="menu-v with-icons stack" id="blogs-in-inner-sidebar">
            <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['b']->key;
?>
                <li<?php if ($_smarty_tpl->tpl_vars['blog_id']->value==$_smarty_tpl->tpl_vars['id']->value){?> class="selected"<?php }?> data-blog-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                    <a href="?module=blog&action=settings&blog=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                        <span class="count">
                            <?php if ($_smarty_tpl->tpl_vars['b']->value['color']!='b-white'){?><i class="icon10 no-overhanging color <?php echo $_smarty_tpl->tpl_vars['b']->value['color'];?>
"></i><?php }?>
                        </span>
                        <?php echo $_smarty_tpl->tpl_vars['b']->value['icon_html'];?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                        <?php if ($_smarty_tpl->tpl_vars['b']->value['status']==blogBLogModel::STATUS_PRIVATE){?><i class="icon10 lock-bw no-overhanging" title="Закрытый блог"></i><?php }?>
                    </a>
                </li>
            <?php } ?>
        </ul>
        <?php if ($_smarty_tpl->tpl_vars['wa']->value->blog->rights(true)){?>
            <ul class="menu-v with-icons stack">
                <li<?php if (!$_smarty_tpl->tpl_vars['blog_id']->value){?> class="selected"<?php }?>>
                    <a href="?module=blog&action=settings&blog=" class="small">
                        <i class="icon10 add"></i>Новый блог
                    </a>
                </li>
            </ul>
        <?php }?>
    </div>

    <div class="content left200px bordered-left">

        <div class="block double-padded b-post <?php echo $_smarty_tpl->tpl_vars['blog']->value['color'];?>
">

            <?php if ($_smarty_tpl->tpl_vars['blog_id']->value){?>
                <div class="float-right block half-padded ie-menu-h-fix">
                    <ul class="menu-h">
                        <li><a href="#" class="dialog-confirm" id="blogdelete-dialog-confirm">
                            <i class="icon16 delete"></i>Удалить блог
                        </a></li>
                    </ul>
                </div>
            <?php }?>
            <h1>
                <?php if (!empty($_smarty_tpl->tpl_vars['blog']->value['name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>Новый блог<?php }?>
            </h1>
            <div class="clear-right"></div>

            <form action="?module=blog&amp;action=settings&amp;blog=<?php echo $_smarty_tpl->tpl_vars['blog_id']->value;?>
" method="post" id="blog-form">
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                <div class="fields form b-blog-settings">
                    <div class="field-group">
                        <div class="field">
                            <div class="name">
                                Название блога
                            </div>
                            <div class="value bold">
                                <input type="text" id="blog-name" class="large" name="settings[name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php if (isset($_smarty_tpl->tpl_vars['messages']->value['blog_name'])&&$_smarty_tpl->tpl_vars['messages']->value['blog_name']){?>
                                    <em id="message-blog-name" class="errormsg"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['blog_name'], ENT_QUOTES, 'UTF-8', true);?>
</em>
                                <?php }else{ ?>
                                    <em id="message-blog-name"></em>
                                <?php }?>
                            </div>
                        </div>
                        <div class="field">
                            <div class="name">
                                Тип блога
                            </div>
                            <div class="value b-ibutton-checkbox no-shift">
                                <ul class="menu-h">
                                    <li><span id="b-settings-blog-type-open-label" class="b-unselected">Закрытый</span></li>
                                    <li><input type="checkbox" id="b-settings-blog-type" name="settings[status]" <?php if ($_smarty_tpl->tpl_vars['blog']->value['status']==blogBlogModel::STATUS_PUBLIC||(isset($_smarty_tpl->tpl_vars['messages']->value['blog_url'])&&$_smarty_tpl->tpl_vars['messages']->value['blog_url'])){?>checked="checked"<?php }?>></li>
                                    <li><span id="b-settings-blog-type-private-label">Открытый</span></li>
                                </ul>

                                <p class="small b-blog-type-disclaimer" id="b-settings-blog-type-open-hint"><i class="icon10 yes"></i> Записи публикуются в общедоступной части и в RSS блога</p>
                                <p class="small b-blog-type-disclaimer" id="b-settings-blog-type-private-hint" style="display: none;"><i class="icon10 lock-bw"></i> Записи публикуются и видны только внутри аккаунтов пользователей Вебасиста, у которых есть доступ к этому блогу</p>
                            </div>
                        </div>

                        <div class="field" id="b-settings-blog-url" <?php if ($_smarty_tpl->tpl_vars['blog']->value['status']!=blogBlogModel::STATUS_PUBLIC&&(!isset($_smarty_tpl->tpl_vars['messages']->value['blog_url'])||!$_smarty_tpl->tpl_vars['messages']->value['blog_url'])){?>style="display:none;"<?php }?>>
                            <div class="name">
                                Адрес блога
                            </div>

                            <?php if (empty($_smarty_tpl->tpl_vars['blog']->value['settlement']['url'])){?>
                                <div class="value no-shift">
                                    <p class="small">
                                        <em><?php echo sprintf('Этот блог не виден на сайте, потому что для него не заданы правила маршрутизации. Чтобы опубликовать блог на сайте, добавьте правило маршрутизации с помощью формы ниже или в разделе «<a href="%s">Структура</a>» в приложении «Сайт».',"../site/#/routing/");?>
</em>
                                    </p>
                                </div>

                                <input type="hidden" name="new_route_setup" value="1">

                                <div class="value no-shift" id="route-selector">
                                    <div class="block h-settle-new-blog">
                                        <p>Введите адрес для этого блога на сайте:</p>
                                        <p>
                                            <label>
                                                <input type="radio" name="route_enabled" value="" checked>
                                                Пока не публиковать этот блог на сайте
                                            </label>
                                        </p>
                                        <p>
                                            <?php if (count($_smarty_tpl->tpl_vars['domains']->value)>1){?><input type="radio" name="route_enabled" value="1">&nbsp;<select name="route_domain"><?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['domains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value, ENT_QUOTES, 'UTF-8', true);?>
</option><?php } ?></select><?php }else{ ?><input type="hidden" name="route_domain" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['domains']->value[0], ENT_QUOTES, 'UTF-8', true);?>
"><label><input type="radio" name="route_enabled" value="1">&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['domains']->value[0], ENT_QUOTES, 'UTF-8', true);?>
</label><?php }?><span>/</span>
                                            <input type="text" id="blog-url" class="short" name="settings[url]" placeholder="*">

                                            <?php if (!empty($_smarty_tpl->tpl_vars['messages']->value['blog_url'])){?>
                                                <em id="message-blog-url" class="errormsg"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['blog_url'], ENT_QUOTES, 'UTF-8', true);?>
</em>
                                            <?php }else{ ?>
                                                <em id="message-blog-url"></em>
                                            <?php }?>
                                        </p>
                                    </div>
                                </div>


                            <?php }else{ ?>
                                <div class="value no-shift">
                                    <?php if ($_smarty_tpl->tpl_vars['blog']->value['id']){?>
                                        <?php if ($_smarty_tpl->tpl_vars['blog']->value['settlement']['single']){?>
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['settlement']['url'], ENT_QUOTES, 'UTF-8', true);?>

                                            <input type="hidden" id="blog-url" name="settings[url]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" >
                                        <?php }else{ ?>
                                            <?php if (!isset($_smarty_tpl->tpl_vars['messages']->value['blog_url'])||!$_smarty_tpl->tpl_vars['messages']->value['blog_url']){?>
                                                <a id="url-link" target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['settlement']['url'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['blog']->value['url']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
/<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['settlement']['url'], ENT_QUOTES, 'UTF-8', true);?>
<span class="slug"><?php if ($_smarty_tpl->tpl_vars['blog']->value['url']){?><?php echo $_smarty_tpl->tpl_vars['blog']->value['url'];?>
/<?php }else{ ?><!-- slug placeholder --><?php }?></span></a>
                                                <a id="inline-edit-url" href="#" class="inline-link small"><i class="icon10 edit"></i><b><i>редактировать</i></b></a>

                                                <span style="display: none;">
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['settlement']['url'], ENT_QUOTES, 'UTF-8', true);?>
<input type="text" id="blog-url" name="settings[url]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" >/
                                                </span>
                                            <?php }else{ ?>
                                                <span>
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['settlement']['url'], ENT_QUOTES, 'UTF-8', true);?>
<input type="text" id="blog-url" class="error" name="settings[url]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" >/
                                                </span>
                                            <?php }?>
                                        <?php }?>
                                    <?php }else{ ?>
                                        <span class="bold">
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['settlement']['url'], ENT_QUOTES, 'UTF-8', true);?>
<input type="text" id="blog-url" <?php if (isset($_smarty_tpl->tpl_vars['messages']->value['blog_url'])&&$_smarty_tpl->tpl_vars['messages']->value['blog_url']){?>class="error"<?php }?> name="settings[url]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" >/
                                        </span>
                                    <?php }?>

                                    <?php if (isset($_smarty_tpl->tpl_vars['blog']->value['other_settlements'])&&!empty($_smarty_tpl->tpl_vars['blog']->value['other_settlements'])){?>
                                        <div id="other-urls" class="hint" style="line-height: 1.2em;">
                                            <?php  $_smarty_tpl->tpl_vars['settlement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['settlement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blog']->value['other_settlements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['settlement']->key => $_smarty_tpl->tpl_vars['settlement']->value){
$_smarty_tpl->tpl_vars['settlement']->_loop = true;
?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settlement']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
<span class="slug" <?php if ($_smarty_tpl->tpl_vars['settlement']->value['single']){?>data-single="1"<?php }?>><?php if ($_smarty_tpl->tpl_vars['blog']->value['url']&&!$_smarty_tpl->tpl_vars['settlement']->value['single']){?><?php echo $_smarty_tpl->tpl_vars['blog']->value['url'];?>
/<?php }else{ ?><!-- slug placeholder --><?php }?></span><br>
                                            <?php } ?>
                                        </div>
                                    <?php }?>

                                    <?php if (isset($_smarty_tpl->tpl_vars['messages']->value['blog_url'])&&$_smarty_tpl->tpl_vars['messages']->value['blog_url']){?>
                                        <em id="message-blog-url" class="errormsg"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['blog_url'], ENT_QUOTES, 'UTF-8', true);?>
</em>
                                    <?php }else{ ?>
                                        <em id="message-blog-url"></em>
                                    <?php }?>

                                    <p class="hint"><br>Адрес, по которому на сайте можно посмотреть список всех записей этого блога.</p>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                    <div class="field-group">
                        <div class="field">
                            <div class="name">
                                Цвет
                            </div>
                            <div class="value">
                                <ul class="menu-h b-blog-settings-colorbox">
                                    <?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['color']->key => $_smarty_tpl->tpl_vars['color']->value){
$_smarty_tpl->tpl_vars['color']->_loop = true;
?>
                                        <li class="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" ><a href="#"><input <?php if (($_smarty_tpl->tpl_vars['blog']->value['color']==$_smarty_tpl->tpl_vars['color']->value)){?>checked="checked"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
"  type="radio" name="settings[color]"></a></li>
                                    <?php } ?>
                                </ul>
                                <span class="hint">Цветовое выделение используется только внутри бекенда приложения «Блог» для удобства работы со множественными блогами</span>
                            </div>
                        </div>
                    </div>
                    <div class="field-group">
                        <div class="field">
                            <div class="name">
                                Иконка
                            </div>
                            <div class="value">
                                <ul class="menu-h">
                                    <?php  $_smarty_tpl->tpl_vars['icon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['icon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['icons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['icon']->key => $_smarty_tpl->tpl_vars['icon']->value){
$_smarty_tpl->tpl_vars['icon']->_loop = true;
?>
                                        <li class="b-setting-icon<?php if (($_smarty_tpl->tpl_vars['blog']->value['icon']==$_smarty_tpl->tpl_vars['icon']->value)){?> selected<?php }?>" id="b-icon-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8', true);?>
"><a href="#"><i class="icon16 <?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"></i></a></li>
                                    <?php } ?>
                                </ul>
                                <input type="hidden" name="settings[icon]" value="<?php echo $_smarty_tpl->tpl_vars['blog']->value['icon'];?>
">
                                <br>
                                <span class="small">Или введите адрес изображения (изображение будет автоматически уменьшено до 16х16 пикселей):</span><br>
                                <input id="b-icon-url" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['icon_url'], ENT_QUOTES, 'UTF-8', true);?>
" name="settings[icon_url]" class="long">
                            </div>
                        </div>
                    </div>

                    
                    <!-- plugin hook: "backend_blog_edit.settings" -->
                    <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['backend_blog_edit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
                        <?php if (is_array($_smarty_tpl->tpl_vars['output']->value)&&isset($_smarty_tpl->tpl_vars['output']->value['settings'])){?>
                            <!-- begin <?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
 --><?php echo $_smarty_tpl->tpl_vars['output']->value['settings'];?>
<!-- end <?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
 -->
                        <?php }?>
                    <?php } ?>

                    <!-- end plugin hook: "backend_blog_edit.settings" -->
                    <div class="field">
                        <div class="value">
                            <input type="submit" class="button green" value="Сохранить">
                            <?php if ($_smarty_tpl->tpl_vars['saved']->value){?>
                                <span id="indicator-just-saved">
                                    <i class="icon16 yes"></i>
                                    Сохранено
                                </span>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </form>
            <?php if ($_smarty_tpl->tpl_vars['blog_id']->value){?>
                <form action="?module=blog&amp;action=delete" method="post">
                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                    <p><input type="hidden" name="id" id="blog-id" value="<?php echo $_smarty_tpl->tpl_vars['blog_id']->value;?>
"></p>
                    <?php /*  Call merged included template "./../../dialogs/blogDelete.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./../../dialogs/blogDelete.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1616659cc9ca67f9ec8-32552229');
content_59cc9ca6b12ef5_48312136($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./../../dialogs/blogDelete.html" */?>
                </form>
            <?php }?>
            <div class="clear-left"></div>
        </div>

    </div> 

</div> 

<script>(function() { "use strict";

    <?php if ($_smarty_tpl->tpl_vars['is_admin']->value){?>
        // Drag-and-drop for blog list in inner sidebar
        $('#blogs-in-inner-sidebar').sortable({
            axis: 'y',
            distance: 5,
            tolerance: 'pointer',
            stop: function(event, ui) {
                $.get("?module=blog&action=sort", {
                    blog_id: $(ui.item).data('blog-id'),
                    sort: $(ui.item).index() + 1
                });
            }
        });
    <?php }?>

    // Controller for creation of new route for this blog
    (function() {
        var $route_wrapper = $('#route-selector');
        if (!$route_wrapper.length) {
            return;
        }

        var $route_enabled_radio = $route_wrapper.find('input:radio[value=1]');
        $route_wrapper.on('keyup change', 'select, input:text', function() {
            $route_enabled_radio.prop('checked', 1);
        });
    })();

    // Animate "saved" indicator
    setTimeout(function() {
        $('#indicator-just-saved').animate({ opacity: 0 }, 1000, function() {
            $(this).remove();
        });
    }, 2000);

})();</script>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2017-09-28 09:54:30
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-apps\blog\templates\dialogs\blogDelete.html" */ ?>
<?php if ($_valid && !is_callable('content_59cc9ca6b12ef5_48312136')) {function content_59cc9ca6b12ef5_48312136($_smarty_tpl) {?><div class="dialog width500px height250px" id="blogdelete-dialog">
  <div class="dialog-background"> </div>
  <div class="dialog-window">
    <div class="dialog-content">
      <div class="dialog-content-indent">
        <h1>Удалить блог</h1>
        <br>
        <?php if ($_smarty_tpl->tpl_vars['posts_total_count']->value){?>
        <p><?php echo sprintf('В блоге «%s» содержится <strong>%d записей</strong>. Что следует сделать с этими записями?',htmlspecialchars($_smarty_tpl->tpl_vars['blogs']->value[$_smarty_tpl->tpl_vars['blog_id']->value]['name'], ENT_QUOTES, 'UTF-8', true),$_smarty_tpl->tpl_vars['posts_total_count']->value);?>
</p>
        <?php $_smarty_tpl->tpl_vars['posts_movable'] = new Smarty_variable(false, null, 0);?>
        <?php $_smarty_tpl->_capture_stack[0][] = array('target', null, null); ob_start(); ?>
          <?php  $_smarty_tpl->tpl_vars['blog_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog_item']->_loop = false;
 $_smarty_tpl->tpl_vars['blog_item_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog_item']->key => $_smarty_tpl->tpl_vars['blog_item']->value){
$_smarty_tpl->tpl_vars['blog_item']->_loop = true;
 $_smarty_tpl->tpl_vars['blog_item_id']->value = $_smarty_tpl->tpl_vars['blog_item']->key;
?><?php if ($_smarty_tpl->tpl_vars['blog_item']->value['rights']>=blogRightConfig::RIGHT_FULL){?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['blog_item_id']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['blog_id']->value==$_smarty_tpl->tpl_vars['blog_item_id']->value){?> disabled="disabled"<?php }else{ ?><?php $_smarty_tpl->tpl_vars['posts_movable'] = new Smarty_variable(true, null, 0);?><?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog_item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
          <?php }?><?php } ?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        </select>

        <label>
          <input type="radio" name="remove"<?php if ($_smarty_tpl->tpl_vars['posts_movable']->value){?> checked="checked"<?php }else{ ?> disabled="disabled"<?php }?> value="move">
          Перенести записи в другой блог:
        </label>
        <select name="blog_id"<?php if (!$_smarty_tpl->tpl_vars['posts_movable']->value){?> disabled="disabled"<?php }?>>
        <?php echo Smarty::$_smarty_vars['capture']['target'];?>

        </select>
        <br>
        <label>
          <input type="radio" name="remove"<?php if (!$_smarty_tpl->tpl_vars['posts_movable']->value){?> checked="checked"<?php }?> value="all">
          Удалить насовсем
        </label>
        <?php }else{ ?>
        <p>В этом блоге нет записей, его можно удалить.</p>
        <?php }?>
      </div>
    </div>
    <div class="dialog-buttons">
      <div class="dialog-buttons-gradient">
        <input type="submit" name="delete" class="button red" value="Удалить блог">
        или <a href="#" class="cancel">отменить</a>
      </div>
    </div>
  </div>
</div><?php }} ?>