<?php /* Smarty version Smarty-3.1.14, created on 2017-09-27 15:11:03
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-apps\installer\templates\actions\plugins\PluginsInfo.html" */ ?>
<?php /*%%SmartyHeaderCode:2264059cb955732cf26-21567188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a8b9ac7d3d9d92d5e6098081241dddfddd5f781' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-apps\\installer\\templates\\actions\\plugins\\PluginsInfo.html',
      1 => 1501509103,
      2 => 'file',
    ),
    '68baead6bf6a33624aba06b11b90d7c6ca99bddc' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-apps\\installer\\templates\\includes\\requirements.html',
      1 => 1452774829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2264059cb955732cf26-21567188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plugin' => 0,
    'query' => 0,
    'error' => 0,
    'wa' => 0,
    'identity_hash' => 0,
    'promo_id' => 0,
    'domain' => 0,
    'current_url' => 0,
    'wa_url' => 0,
    'screenshot' => 0,
    'changelog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59cb9557910d86_46438043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cb9557910d86_46438043')) {function content_59cb9557910d86_46438043($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-system/vendors/smarty-plugins\\modifier.wa_datetime.php';
if (!is_callable('smarty_modifier_wa_date')) include 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-system/vendors/smarty-plugins\\modifier.wa_date.php';
?><div class="block i-product-page">
<?php if (empty($_smarty_tpl->tpl_vars['plugin']->value)){?>
    <div class="content">
        <div class="i-breadcrumbs">
            <a href="#/plugins/">Все плагины</a>
            <?php if (strlen($_smarty_tpl->tpl_vars['query']->value)>1){?>
            <a href="#/plugins/<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
">Список</a>
            <?php }?>
        </div>
        <h1>Плагин не найден</h1>
        <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)){?>
            <p class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8', true);?>
</p>
        <?php }?>
    </div>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['current_url'] = new Smarty_variable("#/plugins/".((string)$_smarty_tpl->tpl_vars['plugin']->value['app'])."/".((string)$_smarty_tpl->tpl_vars['plugin']->value['id'])."/", null, 0);?>
    <div class="sidebar">
    <div class="i-get-started">

        <!-- action block -->
        <?php if ($_smarty_tpl->tpl_vars['plugin']->value['installed']){?>

            <!-- already installed -->
            <div class="align-center">
                <?php if ($_smarty_tpl->tpl_vars['plugin']->value['commercial']&&empty($_smarty_tpl->tpl_vars['plugin']->value['purchased'])){?>

                    

                    <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['license_expire'])){?>
                        
                        <a class="button green" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['renew_url'], ENT_QUOTES, 'UTF-8', true);?>
">Продлить лицензию</a>
                        <p class="red"><i class="icon16 no"></i><?php echo sprintf("Лицензия на использование «%s» на домене <strong>%s</strong> истекла %s",htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['name'], ENT_QUOTES, 'UTF-8', true),htmlspecialchars(installerHelper::getDomain(), ENT_QUOTES, 'UTF-8', true),waDatetime::format('humandate',$_smarty_tpl->tpl_vars['plugin']->value['license_expire']));?>
</p>
                    <?php }else{ ?>
                        
                        <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['purchase_url'], ENT_QUOTES, 'UTF-8', true);?>
" method="post">
                            <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                            <input type="hidden" name="app_id[]" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['slug'];?>
">
                            <input type="hidden" name="hash" value="<?php echo $_smarty_tpl->tpl_vars['identity_hash']->value;?>
">
                            <?php if (!empty($_smarty_tpl->tpl_vars['promo_id']->value)){?>
                                <input type="hidden" name="promo_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php }?>
                            <input type="hidden" name="domain" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
">
                            <input type="hidden" name="installer_url" value="<?php echo $_smarty_tpl->tpl_vars['wa']->value->currentUrl(true,true);?>
">
                            <input type="submit" class="button green" value="Подключить лицензию">
                            <p class="red"><i class="icon16 no"></i><?php echo sprintf("Установка и использование плагина «%s» на домене <strong>%s</strong> не лицензирована. Возможность установки обновлений отключена. Купите новую лицензию или подключите приобретенную ранее лицензию плагина «%s» к этой установке Webasyst.",htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['name'], ENT_QUOTES, 'UTF-8', true),htmlspecialchars(installerHelper::getDomain(), ENT_QUOTES, 'UTF-8', true),htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</p>
                        </form>
                    <?php }?>
                <?php }else{ ?>
                
                    <?php if ($_smarty_tpl->tpl_vars['plugin']->value['action']==waInstallerApps::ACTION_UPDATE){?>
                    
                        <form action="?module=update&action=manager" method="post">
                            <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                            <input type="hidden" name="app_id[<?php echo $_smarty_tpl->tpl_vars['plugin']->value['slug'];?>
]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['plugin']->value['vendor'])===null||$tmp==='' ? 'dummy' : $tmp);?>
<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['edition'])){?>:<?php echo $_smarty_tpl->tpl_vars['plugin']->value['edition'];?>
<?php }?>">
                            <input type="submit" class="button blue" value="Обновить"<?php if (!$_smarty_tpl->tpl_vars['plugin']->value['applicable']){?> disabled="disabled"<?php }?>>
                            <p>
                                <?php echo sprintf("Новая версия %s <strong>%s</strong> доступна для установки (сейчас установлена версия %s).",htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['name'], ENT_QUOTES, 'UTF-8', true),$_smarty_tpl->tpl_vars['plugin']->value['version'],$_smarty_tpl->tpl_vars['plugin']->value['installed']['version']);?>

                                <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['changelog'])){?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
changelog/">Список изменений</a>
                                <?php }?>
                            </p>
                            

                            <?php if (!$_smarty_tpl->tpl_vars['plugin']->value['applicable']){?>
                                <div style="display: none">
                                    <p class="hint">Приложение не может быть обновлено</p>
                                    <?php /*  Call merged included template "templates/includes/requirements.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("templates/includes/requirements.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['plugin']->value), 0, '2264059cb955732cf26-21567188');
content_59cb95574fdd11_73349579($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "templates/includes/requirements.html" */?>
                                </div>
                            <?php }?>

                        </form>
                    <?php }elseif($_smarty_tpl->tpl_vars['plugin']->value['commercial']){?>

                        

                        <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['license_expire'])){?>

                            
                            <p><em class="i-installed-label"><i class="icon16 yes"></i><?php echo sprintf("Это лицензионная установка «%s» на домене %s. Лицензия действительна до <strong>%s</strong>.",htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['name'], ENT_QUOTES, 'UTF-8', true),htmlspecialchars(installerHelper::getDomain(), ENT_QUOTES, 'UTF-8', true),$_smarty_tpl->tpl_vars['plugin']->value['license_expire']);?>
</em></p>
                            <a class="button green" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['renew_url'], ENT_QUOTES, 'UTF-8', true);?>
" style="display: inline-block;">Продлить лицензию</a>
                            <br><br>

                        <?php }else{ ?>

                            
                            <p><em class="i-installed-label"><i class="icon16 yes"></i><?php echo sprintf("Лицензионная установка «%s» на домене <strong>%s</strong>.",htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['name'], ENT_QUOTES, 'UTF-8', true),htmlspecialchars(installerHelper::getDomain(), ENT_QUOTES, 'UTF-8', true));?>
</em></p>

                             <a class="button green" href="https://www.webasyst.com/my/#/neworder/">Купить еще лицензию</a>

                            <p><?php echo sprintf("Приобретение дополнительных лицензий требуется, если вы используете «%s» более чем на одном доменном имени (<a href='%s' target='_blank'>одна лицензия на домен</a>).",htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['name'], ENT_QUOTES, 'UTF-8', true),'http://www.webasyst.ru/help/1199/paid-app-licensing/');?>
</p>
                        <?php }?>

                    <?php }else{ ?>

                        
                        <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['reviews']['url'])){?>
                            <p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['reviews']['url'];?>
" class="large bold">Написать отзыв</a>
                                <i class="icon16 new-window"></i>
                            </p>
                        <?php }?>
                        <p><em class="i-installed-label"><i class="icon16 yes"></i><?php echo sprintf("Установлена последняя версия «%s»: <strong>%s</strong>",htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['name'], ENT_QUOTES, 'UTF-8', true),$_smarty_tpl->tpl_vars['plugin']->value['installed']['version']);?>
</em></p>

                    <?php }?>
                <?php }?>
            </div>

        <?php }else{ ?>

            <!-- not installed -->

            <div class="align-center">
                <?php if ($_smarty_tpl->tpl_vars['plugin']->value['commercial']&&empty($_smarty_tpl->tpl_vars['plugin']->value['purchased'])){?>
                    
                    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['purchase_url'], ENT_QUOTES, 'UTF-8', true);?>
" method="post">
                        <input type="hidden" name="app_id[]" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['slug'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['edition'])){?>:<?php echo $_smarty_tpl->tpl_vars['plugin']->value['edition'];?>
<?php }?>">
                        <input type="hidden" name="hash" value="<?php echo $_smarty_tpl->tpl_vars['identity_hash']->value;?>
">
                        <?php if (!empty($_smarty_tpl->tpl_vars['promo_id']->value)){?>
                            <input type="hidden" name="promo_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php }?>
                        <input type="hidden" name="domain" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
">
                        <input type="hidden" name="installer_url" value="<?php echo $_smarty_tpl->tpl_vars['wa']->value->currentUrl(true,true);?>
">
                        <input type="submit" class="button green" value="Купить и установить"<?php if (!$_smarty_tpl->tpl_vars['plugin']->value['applicable']){?> disabled="disabled"<?php }?>>
                    </form>
                    <p><?php echo sprintf('Загрузка и установка «%s» будет произведена автоматически сразу после оплаты.',htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
 Если у вас уже есть приобретенная лицензия, щелкните по кнопке выше, чтобы подключить лицензию к этой установке Webasyst.</p>
                <?php }else{ ?>
                    
                    <form action="?module=update&action=manager" method="post">
                        <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                        <input type="hidden" name="install" value="1">
                        <input type="hidden" name="app_id[<?php echo $_smarty_tpl->tpl_vars['plugin']->value['slug'];?>
]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['plugin']->value['vendor'])===null||$tmp==='' ? 'dummy' : $tmp);?>
<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['edition'])){?>:<?php echo $_smarty_tpl->tpl_vars['plugin']->value['edition'];?>
<?php }?>">
                        <input type="submit" class="button green" value="Установить"<?php if (!$_smarty_tpl->tpl_vars['plugin']->value['applicable']){?> disabled="disabled"<?php }?>>
                    </form>
                    <p><?php echo sprintf('Загрузка и установка «%s» будет произведена автоматически.',htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</p>
                <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['plugin']->value['applicable']){?>
                    
                    <p class="hint">Приложение не может быть установлено</p>
                    <?php /*  Call merged included template "templates/includes/requirements.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("templates/includes/requirements.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('item'=>$_smarty_tpl->tpl_vars['plugin']->value), 0, '2264059cb955732cf26-21567188');
content_59cb95574fdd11_73349579($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "templates/includes/requirements.html" */?>
                <?php }?>

            </div>

        <?php }?>

        <!-- pricing -->
        <div class="fields width100px">
            <?php if (!$_smarty_tpl->tpl_vars['plugin']->value['installed']){?>
                <?php if ($_smarty_tpl->tpl_vars['plugin']->value['commercial']){?>
                    <div class="field-group">
                        <div class="field">
                            <div class="name">
                                Цена
                            </div>
                            <?php if (ifset($_smarty_tpl->tpl_vars['plugin']->value['lease_price'])=='free'){?>
                                
                                <div class="value">
                                    <strong>Бесплатно</strong>
                                </div>
                            <?php }else{ ?>
                                <div class="value">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['compare_price'])){?><strike class="gray"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['compare_price'];?>
</strike>&nbsp; <?php }?>
                                    <strong<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['compare_price'])){?> class="discounted large"<?php }?>><?php echo $_smarty_tpl->tpl_vars['plugin']->value['price'];?>
</strong>
                                </div>
                                <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['lease_price'])){?>
                                    <div class="value">
                                        или
                                    </div>
                                    <div class="value">
                                        <strong><?php echo sprintf('%s/мес.',$_smarty_tpl->tpl_vars['plugin']->value['lease_price']);?>
</strong>
                                    </div>
                                <?php }?>
                            <?php }?>
                        </div>
                    </div>
                <?php }else{ ?>
                    <div class="field">
                        <div class="name">
                            Цена
                        </div>
                        <div class="value">
                            <strong>Бесплатно</strong>
                        </div>
                    </div>
                <?php }?>
            <?php }?>
            <div class="field">
                <div class="name">
                    Лицензия
                </div>
                <div class="value">

                    <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['license_text'])){?>
                        Коммерческая
                        <a href="#/show/license/" class="js-action">Открыть</a>
                        <div class="dialog">
                            <div class="dialog-background"></div>
                            <div class="dialog-window" style="left: 29%; top: 25%;">
                                <div class="dialog-content">
                                    <div class="dialog-content-indent">
                                        <h2><?php echo htmlspecialchars(sprintf('Лицензионное соглашения на использование «%s»',$_smarty_tpl->tpl_vars['plugin']->value['name']), ENT_QUOTES, 'UTF-8', true);?>
</h2>
                                        <p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['license_text'], ENT_QUOTES, 'UTF-8', true));?>
</p>
                                    </div>
                                </div>
                                <div class="dialog-buttons">
                                    <div class="block double-padded">
                                        <a href="#/hide/license" class="js-action">Закрыть</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }else{ ?>
                        <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['plugin']->value['license'])===null||$tmp==='' ? 'Без лицензии' : $tmp), ENT_QUOTES, 'UTF-8', true);?>

                        <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['license_url'])){?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['license_url'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">Открыть</a> <i class="icon10 new-window"></i><?php }?>
                    <?php }?>

                </div>
            </div>
            <div class="field">
                <div class="name">
                    Разработчик
                </div>
                <div class="value">
                    <?php echo htmlspecialchars((($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['plugin']->value['vendor_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['plugin']->value['vendor'] : $tmp))===null||$tmp==='' ? "—" : $tmp), ENT_QUOTES, 'UTF-8', true);?>

                </div>
            </div>
        </div>

        <div class="clear-both"></div>

    </div>

    <!-- product misc details -->
    <div class="block double-padded">
        <div class="fields width100px">

            <div class="field">
                <div class="name">
                    Версия
                </div>
                <div class="value">
                    <?php echo $_smarty_tpl->tpl_vars['plugin']->value['version'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['changelog'])){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
changelog/" style="font-size: 0.9em;">Список изменений</a>
                    <?php }?>
                </div>
            </div>
            <div class="field">
                <div class="name">
                    Обновлено
                </div>
                <div class="value">
                    <?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['update_datetime'])){?>—<?php }else{ ?><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['plugin']->value['update_datetime'],'humandate');?>
<?php }?>
                </div>
            </div>
            
        </div>

        <?php if ($_smarty_tpl->tpl_vars['plugin']->value['installed']){?>
            <?php if (!$_smarty_tpl->tpl_vars['plugin']->value['system']){?>
                <div class="block top-padded align-center clear-both">
                    <form action="?module=plugins&amp;action=remove" method="POST"  onsubmit="return confirm(this.title);" title="Это полностью удалит код и данные приложения без возможности восстановления. Вы уверены?">
                        <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                        <input type="hidden" name="extras_id[<?php echo $_smarty_tpl->tpl_vars['plugin']->value['slug'];?>
]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['plugin']->value['installed']['vendor'])===null||$tmp==='' ? 'dummy' : $tmp);?>
<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['installed']['edition'])){?>:<?php echo $_smarty_tpl->tpl_vars['plugin']->value['installed']['edition'];?>
<?php }?>">
                        <input type="submit" value="Удалить плагин" class="button red">
                    </form>
                </div>
            <?php }?>
        <?php }?>
    </div>
    </div>

    <div class="content">

        <div class="i-breadcrumbs">
            <a href="#/plugins/<?php echo $_smarty_tpl->tpl_vars['plugin']->value['app'];?>
/" data-href="#/plugins%filter%/<?php echo $_smarty_tpl->tpl_vars['plugin']->value['app'];?>
/" class="js-item-link">Все плагины</a>
            <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['vendor'])){?> &raquo; <a href="#/plugins&vendor=<?php echo $_smarty_tpl->tpl_vars['plugin']->value['vendor'];?>
/" data-href="#/plugins%filter%&vendor=<?php echo $_smarty_tpl->tpl_vars['plugin']->value['vendor'];?>
/%query%/" data-filter="vendor" class="js-item-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['vendor_name'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php }?>
        </div>

        <article class="i-summary">

            <div class="profile">
                <div class="image">
                    <img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['plugin']->value['icon'])===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['wa_url']->value)."wa-apps/installer/img/dummy-plugin.png" : $tmp);?>
" alt="">
                </div>
                <div class="details">
                    <h1><?php echo $_smarty_tpl->tpl_vars['plugin']->value['name'];?>
<?php if (isset($_smarty_tpl->tpl_vars['plugin']->value['status_label'])&&$_smarty_tpl->tpl_vars['plugin']->value['status_label']){?> <span class="highlighted i-plugin-label"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['status_label'];?>
</span><?php }?></h1>
                    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['plugin']->value['summary'])===null||$tmp==='' ? '' : $tmp);?>
</p>

                    <nav>
                        <ul class="menu-h">
                            <li class="selected"<?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['reviews']['url'])){?> style="display: none;"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
">Обзор</a></li>
                            <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['reviews']['url'])){?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['reviews']['url'];?>
" target="_blank">Отзывы <span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['reviews']['count'], ENT_QUOTES, 'UTF-8', true);?>
</span> <i class="icon10 new-window"></i></a></li>
                            <?php }?>
                        </ul>
                    </nav>

                </div>
            </div>
            <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['screenshots'])){?>
                <div class="i-screenshots">
                    <?php $_smarty_tpl->tpl_vars['screenshot'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['plugin']->value['screenshots']), null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['screenshot']->value){?>
                        <div id="current">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['screenshot']->value['img'];?>
" alt="" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['screenshot']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                            <!-- or YouTube / Vimeo video here -->
                        </div>
                    <?php }?>
                    <?php if (count($_smarty_tpl->tpl_vars['plugin']->value['screenshots'])>1){?>
                        <ul class="thumbs">
                            <?php  $_smarty_tpl->tpl_vars['screenshot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['screenshot']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugin']->value['screenshots']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['screenshot']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['screenshot']->key => $_smarty_tpl->tpl_vars['screenshot']->value){
$_smarty_tpl->tpl_vars['screenshot']->_loop = true;
 $_smarty_tpl->tpl_vars['screenshot']->index++;
 $_smarty_tpl->tpl_vars['screenshot']->first = $_smarty_tpl->tpl_vars['screenshot']->index === 0;
?>
                                <li<?php if ($_smarty_tpl->tpl_vars['screenshot']->first){?> class="selected"<?php }?>><a href="#/show/screenshot/" class="js-action"><img data-src="<?php echo $_smarty_tpl->tpl_vars['screenshot']->value['img'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['screenshot']->value['thumb'];?>
" alt="" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['screenshot']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
"/></a></li>
                            <?php } ?>
                        </ul>
                    <?php }?>
                </div>
            <?php }?>

        </article>

        <section class="i-page i-description" id="tab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['slug'], ENT_QUOTES, 'UTF-8', true);?>
-info">
            <p><?php echo $_smarty_tpl->tpl_vars['plugin']->value['description'];?>
</p>
        </section>


            <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['changelog'])){?>
            <section class="i-page" id="tab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['slug'], ENT_QUOTES, 'UTF-8', true);?>
-changelog" style="display:none;">
                <?php  $_smarty_tpl->tpl_vars['changelog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['changelog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugin']->value['changelog']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['changelog']->key => $_smarty_tpl->tpl_vars['changelog']->value){
$_smarty_tpl->tpl_vars['changelog']->_loop = true;
?>

                    <div><strong><?php echo $_smarty_tpl->tpl_vars['changelog']->value['version'];?>
</strong><?php if (!empty($_smarty_tpl->tpl_vars['changelog']->value['datetime'])){?><span class="hint"><?php echo htmlspecialchars(smarty_modifier_wa_date($_smarty_tpl->tpl_vars['changelog']->value['datetime'],'humandate'), ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?><p><?php echo nl2br($_smarty_tpl->tpl_vars['changelog']->value['content']);?>
</p></div>
                <?php } ?>
            </section>
        <?php }?>

        
    </div>
<?php }?>
</div>
<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value)){?>
<script type="text/javascript">
    <!--
    $.layout.window.setTitle('<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr(($_smarty_tpl->tpl_vars['plugin']->value['name']).(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    //-->
</script>
<?php }?>


<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2017-09-27 15:11:03
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-apps\installer\templates\includes\requirements.html" */ ?>
<?php if ($_valid && !is_callable('content_59cb95574fdd11_73349579')) {function content_59cb95574fdd11_73349579($_smarty_tpl) {?>
<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['requirements'])){?>
    <?php $_smarty_tpl->_capture_stack[0][] = array('warning', null, null); ob_start(); ?>
        <?php $_smarty_tpl->tpl_vars['warning_meets'] = new Smarty_variable(false, null, 0);?>
        <?php if (!isset($_smarty_tpl->tpl_vars['class']->value)){?><?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("small red", null, 0);?><?php }?>
        <?php if (!isset($_smarty_tpl->tpl_vars['icon']->value)){?><?php $_smarty_tpl->tpl_vars['icon'] = new Smarty_variable(false, null, 0);?><?php }?>
        <ul class="menu-v">
            <?php  $_smarty_tpl->tpl_vars['requirement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['requirement']->_loop = false;
 $_smarty_tpl->tpl_vars['subject'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['requirements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['requirement']->key => $_smarty_tpl->tpl_vars['requirement']->value){
$_smarty_tpl->tpl_vars['requirement']->_loop = true;
 $_smarty_tpl->tpl_vars['subject']->value = $_smarty_tpl->tpl_vars['requirement']->key;
?>
                <?php if (($_smarty_tpl->tpl_vars['requirement']->value['warning']&&!$_smarty_tpl->tpl_vars['requirement']->value['passed'])){?> <?php $_smarty_tpl->tpl_vars['warning_meets'] = new Smarty_variable(true, null, 0);?>
                    <li>
                        <span class="<?php if (strstr($_smarty_tpl->tpl_vars['subject']->value,'app.')==$_smarty_tpl->tpl_vars['subject']->value){?>hint<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['requirement']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php if ($_smarty_tpl->tpl_vars['icon']->value){?><i class="icon10 no<?php if ($_smarty_tpl->tpl_vars['requirement']->value['passed']){?>-bw<?php }?>"></i><?php }?>
                            <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['requirement']->value['warning'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['requirement']->value['note'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>

                        </span>
                    </li>
                <?php }?>
            <?php } ?>
        </ul>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php if ($_smarty_tpl->tpl_vars['warning_meets']->value&&Smarty::$_smarty_vars['capture']['warning']){?>
        <?php echo Smarty::$_smarty_vars['capture']['warning'];?>

    <?php }?>
<?php }?>
<?php }} ?>