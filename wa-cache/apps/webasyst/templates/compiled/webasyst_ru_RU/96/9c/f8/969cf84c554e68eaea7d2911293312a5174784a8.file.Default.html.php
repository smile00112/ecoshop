<?php /* Smarty version Smarty-3.1.14, created on 2017-09-27 15:35:27
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-widgets\weather\templates\Default.html" */ ?>
<?php /*%%SmartyHeaderCode:1066159cb9b0f673cf1-62482072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '969cf84c554e68eaea7d2911293312a5174784a8' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-widgets\\weather\\templates\\Default.html',
      1 => 1506500836,
      2 => 'file',
    ),
    '328160c4d268525705c0fb8007e8a5912d282f9a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-widgets\\weather\\css\\weather.css',
      1 => 1506500836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1066159cb9b0f673cf1-62482072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'weather' => 0,
    '_widget_class' => 0,
    'info' => 0,
    'city' => 0,
    'wa_url' => 0,
    'unit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59cb9b0f7cb940_78463820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cb9b0f7cb940_78463820')) {function content_59cb9b0f7cb940_78463820($_smarty_tpl) {?><style>
    <?php /*  Call merged included template "../css/weather.css" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../css/weather.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1066159cb9b0f673cf1-62482072');
content_59cb9b0f6b6389_72665797($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../css/weather.css" */?>
</style>

<?php $_smarty_tpl->tpl_vars['_widget_class'] = new Smarty_variable("s-weather-day", null, 0);?>
<?php if (empty($_smarty_tpl->tpl_vars['weather']->value['weather']['icon'])){?>
    <?php $_smarty_tpl->tpl_vars['_widget_class'] = new Smarty_variable("s-weather-notavailable", null, 0);?>
<?php }else{ ?>
    <?php if (strstr($_smarty_tpl->tpl_vars['weather']->value['weather']['icon'],'n')){?>
        <?php $_smarty_tpl->tpl_vars['_widget_class'] = new Smarty_variable("s-weather-night", null, 0);?>
    <?php }?>
<?php }?>

<div class="s-weather <?php echo $_smarty_tpl->tpl_vars['_widget_class']->value;?>
" id="s-weather-widget-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">

    <?php if (empty($_smarty_tpl->tpl_vars['weather']->value)||!empty($_smarty_tpl->tpl_vars['weather']->value['message'])){?>
        <?php if (!empty($_smarty_tpl->tpl_vars['weather']->value['message'])&&$_smarty_tpl->tpl_vars['weather']->value['message']!=='Error: Not found city'){?>
            <div class="errormsg"><?php echo $_smarty_tpl->tpl_vars['weather']->value['message'];?>
</div>
        <?php }else{ ?>
            <h5 class="align-center hint wa-no-weather">
                <?php if ($_smarty_tpl->tpl_vars['city']->value){?>
                    <?php echo sprintf('Информация о погоде в городе <strong>%s</strong> не найдена. Пожалуйста, проверьте правильность написания города в профиле вашего пользователя.',(($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '(неизвестный город)' : $tmp));?>

                <?php }else{ ?>
                    Введите название города в профиле пользователя или в настройках виджета.
                <?php }?>
            </h5>
        <?php }?>
    <?php }else{ ?>

        <div class="s-weather-icon-wrapper">
            <div class="s-weather-icon" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-widgets/weather/img/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['weather']->value['weather']['icon'])===null||$tmp==='' ? 'unknown' : $tmp);?>
.png');"></div>
        </div>

        <h2><?php echo $_smarty_tpl->tpl_vars['weather']->value['main']['temp'];?>
&deg;<?php if ($_smarty_tpl->tpl_vars['unit']->value=="F"){?>F<?php }?></h2>
        <h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8', true);?>
</h6>

    <?php }?>
</div>

<script>(function($) {

    setTimeout(function() {
        var widget_id = "<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
";
        try {
            DashboardWidgets[widget_id].renderWidget();
        } catch (e) {}
    }, 15 * 60 * 1000);

})(jQuery);</script><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2017-09-27 15:35:27
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-widgets\weather\css\weather.css" */ ?>
<?php if ($_valid && !is_callable('content_59cb9b0f6b6389_72665797')) {function content_59cb9b0f6b6389_72665797($_smarty_tpl) {?>.s-weather {
  height: 100%;
  box-sizing: border-box;
  background: #1c60ac;
  text-align: center;
  font-size: 16px;
  color: #fff;
  padding: 10em 0 0 0;
}
.s-weather .s-weather-icon-wrapper {
  position: absolute;
  top: -2.5em;
  left: 0;
  width: 100%;
  height: auto;
  text-align: center;
}
.s-weather .s-weather-icon-wrapper .s-weather-icon {
  position: relative;
  display: inline-block;
  width: 16em;
  height: 16em;
  background-size: 16em 16em;
}
.s-weather h2 {
  position: relative;
  left: 0.2em;
  margin: 0;
  font-weight: normal;
  font-size: 4em;
}
.s-weather h4 {
  margin: 0.75em 0 0;
  opacity: 0.8;
  font-weight: normal;
}
.s-weather .wa-no-weather {
  padding: 2em 0;
  font-weight: normal;
  color: #fff;
}
.s-weather.s-weather-day {
  background: -moz-linear-gradient(top, #133682 0%, #2793df 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #133682), color-stop(100%, #2793df));
  background: -webkit-linear-gradient(top, #133682 0%, #2793df 100%);
  background: -o-linear-gradient(top, #133682 0%, #2793df 100%);
  background: -ms-linear-gradient(top, #133682 0%, #2793df 100%);
  background: linear-gradient(to bottom, #133682 0%, #2793df 100%);
}
.s-weather.s-weather-night {
  background: #0f2657 url("../img/night.jpg") no-repeat;
  background-size: cover;
}
.s-weather.s-weather-notavailable {
  background: #aaa;
}
.widget-1x1 .s-weather,
.widget-2x1 .s-weather {
  padding-top: 5em;
}
.widget-1x1 .s-weather.s-weather-notavailable,
.widget-2x1 .s-weather.s-weather-notavailable {
  padding-top: 0;
}
.widget-1x1 .s-weather .s-weather-icon-wrapper,
.widget-2x1 .s-weather .s-weather-icon-wrapper {
  top: -1.25em;
}
.widget-1x1 .s-weather .s-weather-icon-wrapper .s-weather-icon,
.widget-2x1 .s-weather .s-weather-icon-wrapper .s-weather-icon {
  width: 8em;
  height: 8em;
  background-size: 8em 8em;
}
.widget-1x1 .s-weather h2,
.widget-2x1 .s-weather h2 {
  font-size: 2em;
}
.widget-2x1 .s-weather .wa-no-weather {
  padding: 2em 2.75em;
}
.widget-2x2 .s-weather.s-weather-notavailable {
  padding-top: 0;
}
.widget-2x2 .s-weather h6 {
  font-size: 1.3em;
}
.widget-2x2 .s-weather .wa-no-weather {
  padding: 4em 1.5em;
}
.tv .s-weather-day {
  background: -moz-linear-gradient(top, #0f2d62 0%, #1b679c 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #0f2d62), color-stop(100%, #1b679c));
  background: -webkit-linear-gradient(top, #0f2d62 0%, #1b679c 100%);
  background: -o-linear-gradient(top, #0f2d62 0%, #1b679c 100%);
  background: -ms-linear-gradient(top, #0f2d62 0%, #1b679c 100%);
  background: linear-gradient(to bottom, #0f2d62 0%, #1b679c 100%);
}
.tv .s-weather,
.mobile .s-weather {
  font-size: 1.1rem;
}
.mobile .widget-1x1 .s-weather h2,
.mobile .widget-2x1 .s-weather h2 {
  font-size: 2em;
}
<?php }} ?>