<?php /* Smarty version Smarty-3.1.14, created on 2017-09-27 16:28:05
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-apps\blog\templates\actions\settings\Settings.html" */ ?>
<?php /*%%SmartyHeaderCode:194659cba765706cc5-61511391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '333b66de3660c92df1854845c17598889f16a1d7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-apps\\blog\\templates\\actions\\settings\\Settings.html',
      1 => 1506500510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194659cba765706cc5-61511391',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'saved' => 0,
    'wa' => 0,
    'user_settings' => 0,
    'type' => 0,
    'last_reminder_cron_time' => 0,
    'cron_command' => 0,
    'backend_settings' => 0,
    'user_email' => 0,
    'routing_settings_url' => 0,
    'photos_app_available' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59cba7658cfdb6_26528955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cba7658cfdb6_26528955')) {function content_59cba7658cfdb6_26528955($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-system/vendors/smarty-plugins\\modifier.wa_datetime.php';
?>
<div class="shadowed">

  <?php if (isset($_smarty_tpl->tpl_vars['saved']->value)&&$_smarty_tpl->tpl_vars['saved']->value){?>
  <div class="block double-padded b-message-success">
    <i class="icon16 yes"></i>Настройки сохранены
  </div>
  <?php }?>

  <form action="?blog=&amp;module=settings" method="post">

    <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>


    <div class="block double-padded">
      <div class="fields form">
        <h6 class="heading"><i class="icon16 userpic20" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['wa']->value->user()->getPhoto(20);?>
);"></i> Личные настройки</h6>
        <br>
        <div class="field-group">
          <div class="field">
            <div class="name nowrap">
              Счетчик на иконке
              <span class="indicator red">1</span>
            </div>
            <?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable($_smarty_tpl->tpl_vars['user_settings']->value['type_items_count'], null, 0);?>
            <div class="value no-shift">
              <label>
                <input type="checkbox" name="type_items_count[overdue]" value="overdue" <?php if (isset($_smarty_tpl->tpl_vars['type']->value['overdue'])&&$_smarty_tpl->tpl_vars['type']->value['overdue']){?> checked="checked"<?php }?>>
                Мои просроченные черновики
                <span class="hint">записи с просроченным сроком публикации</span>
              </label>
            </div>
            <div class="value">
              <label>
                <input type="checkbox" name="type_items_count[posts]" value="posts"  <?php if (isset($_smarty_tpl->tpl_vars['type']->value['posts'])&&$_smarty_tpl->tpl_vars['type']->value['posts']){?> checked="checked"<?php }?>>
                Новые записи других пользователей
              </label>
            </div>
            <div class="value">
              <label>
                <input type="checkbox" name="type_items_count[comments]" value="comments" class="js-primary-checkbox" <?php if (isset($_smarty_tpl->tpl_vars['type']->value['comments'])&&$_smarty_tpl->tpl_vars['type']->value['comments']){?> checked="checked"<?php }?>>
                Новые комментарии
              </label>
              <div class="block small">
                <label>
                  <input type="checkbox" style="margin-top: -0.4em;" disabled name="type_items_count[comments]" value="comments_to_my_post" <?php if (isset($_smarty_tpl->tpl_vars['type']->value['comments'])&&($_smarty_tpl->tpl_vars['type']->value['comments']=='comments_to_my_post')){?> checked="checked"<?php }?>>
                  Учитывать только комментарии к моим записям
                </label>
              </div>
            </div>
          </div>
          <div class="field">
            <div class="name">
              Уведомления
            </div>
            <div class="value no-shift">
              <label>
                <input type="checkbox" name="reminder" id="s-reminder" value="<?php echo $_smarty_tpl->tpl_vars['user_settings']->value['reminder'];?>
" <?php if ($_smarty_tpl->tpl_vars['user_settings']->value['reminder']||$_smarty_tpl->tpl_vars['user_settings']->value['reminder']=='0'){?>checked="checked"<?php }?>>
                Напоминать мне о моих запланированных публикациях
              </label>
              <select id="s-reminder-day">
                <option value="0" <?php if ($_smarty_tpl->tpl_vars['user_settings']->value['reminder']&&$_smarty_tpl->tpl_vars['user_settings']->value['reminder']=='0'){?>selected="selected"<?php }?>>Когда публикация просрочена</option>
                <option value="1" <?php if ($_smarty_tpl->tpl_vars['user_settings']->value['reminder']=='1'){?>selected="selected"<?php }?>>За 1 день до запланированной публикации</option>
                <option value="2" <?php if ($_smarty_tpl->tpl_vars['user_settings']->value['reminder']=='2'){?>selected="selected"<?php }?>>За 2 дня до запланированной публикации</option>
                <option value="3" <?php if ($_smarty_tpl->tpl_vars['user_settings']->value['reminder']=='3'){?>selected="selected"<?php }?>>За 3 дня до запланированной публикации</option>
                <option value="7" <?php if ($_smarty_tpl->tpl_vars['user_settings']->value['reminder']=='7'){?>selected="selected"<?php }?>>За неделю до запланированной публикации</option>
              </select>
            </div>
            <div class="value no-shift">
                <p class="hint<?php if (!$_smarty_tpl->tpl_vars['last_reminder_cron_time']->value){?> b-cron-error<?php }?>"  id="s-reminder-hint" <?php if (!$_smarty_tpl->tpl_vars['user_settings']->value['reminder']&&$_smarty_tpl->tpl_vars['user_settings']->value['reminder']!='0'){?>style="display:none;"<?php }?>>
                <?php if ($_smarty_tpl->tpl_vars['last_reminder_cron_time']->value){?>
                    <i class="icon10 yes"></i>
                    <?php echo sprintf('Напоминания будут отправляться вам по почте по адресу <strong class="cron-command">%s</strong> не чаще, чем раз в день. CRON, необходимый для работы напоминаний, включен и работает. Время последнего запуска: <strong>%s</strong>',htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->user()->get('email','default'), ENT_QUOTES, 'UTF-8', true),smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['last_reminder_cron_time']->value,'humandatetime'));?>

                <?php }else{ ?>
                    <i class="icon10 no"></i>
                    <span class="red"><?php echo sprintf('Для работы напоминаний необходимо настроить CRON, что позволит приложению «Блог» выполнять действия по расписанию без участия пользователя. Команда для CRON (<a href="http://www.webasyst.ru/developers/docs/tips/cron/" target="_blank">документация по настройке</a>):<br /><br /> <strong class="cron-command">%s</strong>',$_smarty_tpl->tpl_vars['cron_command']->value);?>
</span>
                <?php }?>
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php if (isset($_smarty_tpl->tpl_vars['backend_settings']->value)&&'backend_settings'){?>

        <div class="block double-padded">
          <div class="fields form">
            <h6 class="heading">Настройки общедоступной части</h6>
            <br>
            <div class="field-group">

              <div class="field">
                <div class="name">
                  <label>Комментарии</label>
                </div>
                <div class="value b-ibutton-checkbox">
                  <ul class="menu-h">
                    <li><span id="settings-comments-switcher-off-label" class="b-unselected">Выкл</span></li>
                    <li><input type="checkbox" name="show_comments" id="settings-comments-switcher" <?php if ($_smarty_tpl->tpl_vars['backend_settings']->value['show_comments']=='1'){?>checked="checked"<?php }?> value="1"></li>
                    <li><span id="settings-comments-switcher-on-label">Вкл</span></li>
                  </ul>
                </div>
              </div>

              <div class="field js-comments-field"<?php if (!$_smarty_tpl->tpl_vars['backend_settings']->value['show_comments']){?> style="display:none;"<?php }?> id="settings-captcha-field">

                <div class="value">
                  <input type="checkbox" name="request_captcha" id="settings-captcha-switcher" <?php if ($_smarty_tpl->tpl_vars['backend_settings']->value['request_captcha']=='1'){?>checked="checked"<?php }?> value="1"></li>
                  <label for="settings-captcha-switcher">Защита формы добавления комментария <em>капчей</em> (CAPTCHA)</label>
                </div>

              </div>

              <div class="field js-comments-field"<?php if (!$_smarty_tpl->tpl_vars['backend_settings']->value['show_comments']){?> style="display:none;"<?php }?> id="settings-authorization-field">

                <div class="value">
                  <input type="checkbox" name="require_authorization" id="settings-authorization-switcher" <?php if ($_smarty_tpl->tpl_vars['backend_settings']->value['require_authorization']=='1'){?>checked="checked"<?php }?> value="1"></li>
                  <label for="settings-authorization-switcher">Только зарегистрированные пользователи могут оставлять комментарии</label><br />
                  <span class="hint">Для пользователей, которые оставляют комментарии, будут создаваться записи в приложении «Контакты»</span>
                </div>

              </div>

            </div>


            <div class="field-group">

              <div class="field">

                <div class="name">
                  <label>RSS</label>
                </div>

                <div class="value no-shift">
                  Количество записей в RSS-файле:<br>
                  <input type="text" name="rss_posts_number" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['backend_settings']->value['rss_posts_number'], ENT_QUOTES, 'UTF-8', true);?>
">
                  <p class="hint">Рекомендуемый диапазон: от 10 до 25</p>
                </div>

                <div class="value no-shift">
                  тег &lt;автор&gt;:
                </div>

                <div class="value no-shift">
                    <label>
                      <input type="radio" <?php if ($_smarty_tpl->tpl_vars['backend_settings']->value['rss_author_tag']=='author'){?>checked="checked"<?php }?> name="rss_author_tag" value="author">
                      Email автора записи
                      <span class="hint"><?php echo sprintf('для ваших записей: %s',htmlspecialchars($_smarty_tpl->tpl_vars['user_email']->value, ENT_QUOTES, 'UTF-8', true));?>
</span>
                    </label>
                </div>
                <div class="value">
                    <label>
                      <input type="radio" <?php if ($_smarty_tpl->tpl_vars['backend_settings']->value['rss_author_tag']!='author'){?>checked="checked"<?php }?> name="rss_author_tag" value="">
                      Не указывать тег author
                    </label>
                </div>

              </div>

            </div>

            <?php if ($_smarty_tpl->tpl_vars['routing_settings_url']->value){?>
            <div class="field-group">

              <div class="field">

                <div class="name">
                    <label>Адреса (URL) и заголовки (title)</label>
                </div>

                <div class="value no-shift">
                    <?php echo sprintf('Формат настраивается в <a href="%s">настройках поселения блога</a> внутри приложения «Сайт»',htmlspecialchars($_smarty_tpl->tpl_vars['routing_settings_url']->value, ENT_QUOTES, 'UTF-8', true));?>

                </div>

              </div>

            </div>
            <?php }?>

            <div class="field-group">
              <div class="field">
                <div class="name">
                    <label>Хранилище фотографий</label>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['photos_app_available']->value){?>
                    <div class="value no-shift">
                        <label>
                          <input type="radio" <?php if ($_smarty_tpl->tpl_vars['backend_settings']->value['image_storage']!='photo_app'){?>checked="checked"<?php }?> name="image_storage" value="blog_app">
                          Папка
                          <span class="hint">wa-data/public/blog/img/</span>
                        </label>
                    </div>
                    <div class="value">
                        <label>
                          <input type="radio" <?php if ($_smarty_tpl->tpl_vars['backend_settings']->value['image_storage']=='photo_app'){?>checked="checked"<?php }?> name="image_storage" value="photo_app">
                          Приложение «Фото»
                        </label>
                    </div>
                <?php }else{ ?>
                    <input type="hidden" name="image_storage" value="<?php echo $_smarty_tpl->tpl_vars['backend_settings']->value['image_storage'];?>
">
                    <div class="value no-shift">
                        <label>
                          <input type="radio" checked disabled>
                          Папка
                          <span class="hint">wa-data/public/blog/img/</span>
                        </label>
                    </div>
                    <div class="value">
                        <label>
                          <input type="radio" disabled>
                          Приложение «Фото»
                        </label>
                    </div>
                <?php }?>
              </div>
            </div>

        </div>
      <?php }?>

      <div class="block double-padded">
        <div class="field-group">

          <div class="field">

            <div class="value submit">
              <input type="submit" name="save" class="button green" value="Сохранить">
            </div>

          </div>

        </div>
      </div>

    </div>

  </form>




</div>

<script type="text/javascript">
  $(function() {

    setupSwitcherWidget();

    function setupSwitcherWidget()
    {

      var switcher = $('#settings-comments-switcher');

      if (!switcher.length) {
        return;
      }

      handler.call(switcher.get(0));

      switcher.iButton({
        labelOn : '&nbsp;',
        labelOff : '&nbsp;'
      }).change(handler);

      function handler()
      {
        var onLabelSelector = '#' + this.id + '-on-label',
        offLabelSelector = '#' + this.id + '-off-label';

        if (!this.checked) {
          $(onLabelSelector).addClass('b-unselected');
          $(offLabelSelector).removeClass('b-unselected');
          $('.js-comments-field').hide(200);
        } else {
          $(onLabelSelector).removeClass('b-unselected');
          $(offLabelSelector).addClass('b-unselected');
          $('.js-comments-field').show(200);
        }
      }
    };

    $('.js-primary-checkbox').change(function(){
      var name = $(this).attr('name').replace(/([\]\[])/g,'\\$1');
      var disabled = $(this).attr('checked')?false:true;
      $('input[name='+name+']').each(function(){
        if(!$(this).hasClass('js-primary-checkbox')){
          $(this).attr('disabled',disabled);
        }
      });
    });

    $('.js-primary-checkbox').change();

    $('#s-reminder-day').change(function() {
        $('input[name=reminder]').val($(this).val());
    });
    $('input[name=reminder]').val($('#s-reminder-day').val());
    $('#s-reminder').click(function() {
        if (this.checked) {
            $('#s-reminder-hint').show();
        } else {
            $('#s-reminder-hint').hide();
        }
    });

    $('.cron-command').click(function() {
        var el = $('<input style="font-weight: bold; margin-top:2px; border: 1px solid #ccc; color: red; padding: 1px; width:' + ($(this).width() + 2) + 'px" type="text" readonly="readonly" />').val($(this).text()).focus(function () {
            $(this).select();
        }).mouseup(function(e){
            e.preventDefault();
        });
        $(this).replaceWith(el);
        el.select();
    });

  });
</script><?php }} ?>