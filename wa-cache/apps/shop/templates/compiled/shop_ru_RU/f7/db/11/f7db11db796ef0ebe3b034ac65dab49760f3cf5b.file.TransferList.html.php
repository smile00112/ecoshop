<?php /* Smarty version Smarty-3.1.14, created on 2017-09-28 17:46:38
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-apps\shop\templates\actions\transfer\TransferList.html" */ ?>
<?php /*%%SmartyHeaderCode:2544259cd0b4e493d43-70186836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7db11db796ef0ebe3b034ac65dab49760f3cf5b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-apps\\shop\\templates\\actions\\transfer\\TransferList.html',
      1 => 1506500544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2544259cd0b4e493d43-70186836',
  'function' => 
  array (
    'revert_order' => 
    array (
      'parameter' => 
      array (
        'order' => '',
      ),
      'compiled' => '',
    ),
    'field_link' => 
    array (
      'parameter' => 
      array (
        'field_id' => '',
        'field_name' => '',
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'container_id' => 0,
    'order' => 0,
    'disabled_sort' => 0,
    'field_id' => 0,
    'sort' => 0,
    'field_name' => 0,
    'transfers' => 0,
    'transfer' => 0,
    'disabled_lazyload' => 0,
    'already_loaded_count' => 0,
    'total_count' => 0,
    'limit' => 0,
    'chunk' => 0,
    'offset' => 0,
    'list' => 0,
    'lazyloading' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59cd0b4e655133_05963955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cd0b4e655133_05963955')) {function content_59cd0b4e655133_05963955($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_date')) include 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-system/vendors/smarty-plugins\\modifier.wa_date.php';
?><?php $_smarty_tpl->tpl_vars['container_id'] = new Smarty_variable(uniqid('s-transfer-list-'), null, 0);?>

<div id="<?php echo $_smarty_tpl->tpl_vars['container_id']->value;?>
" class="s-transfer-list-container">

<?php if (!function_exists('smarty_template_function_revert_order')) {
    function smarty_template_function_revert_order($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['revert_order']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><?php if ($_smarty_tpl->tpl_vars['order']->value==='asc'||!$_smarty_tpl->tpl_vars['order']->value){?>desc<?php }else{ ?>asc<?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_field_link')) {
    function smarty_template_function_field_link($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['field_link']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php if (!$_smarty_tpl->tpl_vars['disabled_sort']->value){?>
        <a class="s-transfer-list-sort" data-sort="<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
" data-order="<?php if ($_smarty_tpl->tpl_vars['field_id']->value!==$_smarty_tpl->tpl_vars['sort']->value){?>asc<?php }else{ ?><?php smarty_template_function_revert_order($_smarty_tpl,array('order'=>$_smarty_tpl->tpl_vars['order']->value));?>
<?php }?>" href="javascript:void(0);"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
    <?php }else{ ?>
        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
    <?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php $_smarty_tpl->_capture_stack[0][] = array('default', "list", null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['transfers']->value){?>
        <table class="zebra single-lined" id="s-transfer-list">
            <thead>
                <tr class="header white">
                    <th><?php smarty_template_function_field_link($_smarty_tpl,array('field_id'=>'string_id','field_name'=>'ID'));?>
</th>
                    <th><?php smarty_template_function_field_link($_smarty_tpl,array('field_id'=>'status','field_name'=>'Статус'));?>
</th>
                    <th><?php smarty_template_function_field_link($_smarty_tpl,array('field_id'=>'stock_from.name','field_name'=>'Откуда'));?>
</th>
                    <th></th>
                    <th><?php smarty_template_function_field_link($_smarty_tpl,array('field_id'=>'stock_to.name','field_name'=>'Куда'));?>
</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['transfer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['transfer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['transfers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['transfer']->key => $_smarty_tpl->tpl_vars['transfer']->value){
$_smarty_tpl->tpl_vars['transfer']->_loop = true;
?>
                    <tr data-id="<?php echo $_smarty_tpl->tpl_vars['transfer']->value['id'];?>
" class='s-transfer-item'>
                        <td><a href="javascript:void(0)" class="s-transfer-info" data-id="<?php echo $_smarty_tpl->tpl_vars['transfer']->value['id'];?>
"><span class="s-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['transfer']->value['string_id'], ENT_QUOTES, 'UTF-8', true);?>
</span></a></td>
                        <td><a href="javascript:void(0)" class="s-transfer-info" data-id="<?php echo $_smarty_tpl->tpl_vars['transfer']->value['id'];?>
">
                            <?php if ($_smarty_tpl->tpl_vars['transfer']->value['status']=='sent'){?>
                                <em class="s-transfer-status-sent"><i class="icon16 status-yellow-tiny"></i>В пути</em>
                            <?php }elseif($_smarty_tpl->tpl_vars['transfer']->value['status']=='completed'){?>
                                <span class="s-transfer-status-completed"><i class="icon16 yes"></i>Выполнен</span>
                            <?php }elseif($_smarty_tpl->tpl_vars['transfer']->value['status']=='cancelled'){?>
                                <span class="red"><i class="icon16 cross"></i>Отменен</span>
                            <?php }?>
                            </a></td>
                        <td><a href="javascript:void(0)" class="s-transfer-info" data-id="<?php echo $_smarty_tpl->tpl_vars['transfer']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['transfer']->value['stock_from']['name']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['transfer']->value['stock_from']['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><span class="gray" title="Новое поступление">&mdash;</span><?php }?></a></td>
                        <td class="gray"><a href="javascript:void(0)" class="s-transfer-info" data-id="<?php echo $_smarty_tpl->tpl_vars['transfer']->value['id'];?>
">&rarr;</a></td>
                        <td><a href="javascript:void(0)" class="s-transfer-info" data-id="<?php echo $_smarty_tpl->tpl_vars['transfer']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['transfer']->value['stock_to']['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
                        <td class="gray"><a href="javascript:void(0)" class="s-transfer-info" data-id="<?php echo $_smarty_tpl->tpl_vars['transfer']->value['id'];?>
"><?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['transfer']->value['create_datetime'],'humandatetime');?>
</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php }else{ ?>
        <p>Нет трансферов в статусе «В пути».</p>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array('default', "lazyloading", null); ob_start(); ?>
    <?php if (!$_smarty_tpl->tpl_vars['disabled_lazyload']->value){?>
        <div class="lazyloading-wrapper">
            <div class="lazyloading-progress-string">
                <?php echo _w('%d transfer','%d transfers',$_smarty_tpl->tpl_vars['already_loaded_count']->value);?>
&nbsp;<?php echo sprintf(_w('of %d'),$_smarty_tpl->tpl_vars['total_count']->value);?>

            </div><br>
            <a href="javascript:void(0);" class="lazyloading-link" <?php if ($_smarty_tpl->tpl_vars['already_loaded_count']->value>=$_smarty_tpl->tpl_vars['total_count']->value){?>style="display:none;"<?php }?>>
                Показать еще
            </a>
            <span class="lazyloading-progress" style="display:none">
                <i class="icon16 loading"></i> Загрузка
                <span class="lazyloading-chunk">
                    <?php $_smarty_tpl->tpl_vars['chunk'] = new Smarty_variable(max(min($_smarty_tpl->tpl_vars['total_count']->value-$_smarty_tpl->tpl_vars['already_loaded_count']->value,$_smarty_tpl->tpl_vars['limit']->value),0), null, 0);?>
                    <?php echo _w('%d transfer','%d transfers',$_smarty_tpl->tpl_vars['chunk']->value);?>
...
                </span>
            </span>
        </div>
    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['offset']->value<=0){?>

    <?php echo $_smarty_tpl->tpl_vars['list']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['lazyloading']->value;?>


    <script>
        $(function () {

            var container = $('#<?php echo $_smarty_tpl->tpl_vars['container_id']->value;?>
');

            <?php if (!$_smarty_tpl->tpl_vars['disabled_lazyload']->value){?>

                (function () {
                    var offset = <?php echo $_smarty_tpl->tpl_vars['already_loaded_count']->value;?>
;
                    var total_count = <?php echo $_smarty_tpl->tpl_vars['total_count']->value;?>
;
                    var url = '?module=transfer&action=list<?php if ($_smarty_tpl->tpl_vars['sort']->value){?>&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
<?php if ($_smarty_tpl->tpl_vars['order']->value==='desc'){?>&order=desc<?php }?><?php }?>';

                    $(window).lazyLoad('stop'); // stop previous lazy-load implementation

                    if (offset < total_count) {
                        var self = this;
                        $(window).lazyLoad({
                            container: container,
                            state: 'wake',
                            load: function() {
                                $(window).lazyLoad('sleep');
                                $('.lazyloading-link', container).hide();
                                $('.lazyloading-progress', container).show();
                                $.get(url + '&offset=' + offset + '&total_count=' + total_count, function(data) {

                                    var html = $('<div></div>').html(data);
                                    var list = html.find('table tbody tr');

                                    if (list.length) {
                                        offset += list.length;
                                        $('table', container).append(list);
                                        if (offset >= total_count) {
                                            $(window).lazyLoad('stop');
                                            $('.lazyloading-progress', container).hide();
                                        } else {
                                            $(window).lazyLoad('wake');
                                            $('.lazyloading-link', container).show();
                                        }
                                    } else {
                                        $(window).lazyLoad('stop');
                                        $('.lazyloading-progress', container).hide();
                                    }

                                    $('.lazyloading-progress-string', container).
                                        replaceWith($('.lazyloading-progress-string', html));
                                    $('.lazyloading-chunk', container).
                                        replaceWith($('.lazyloading-chunk', html));

                                    html.remove();

                                });
                            }
                        });
                        container.off('click', '.lazyloading-link').on('click', '.lazyloading-link', function() {
                            $(window).lazyLoad('force');
                            return false;
                        });
                    }
                })();

            <?php }?>

            container.bind('info', function (e, transfer_id) {
                var d = $('#s-transfer-info-' + transfer_id);
                if (d.length) {
                    d.parent().remove();
                }
                var p = $('<div></div>').appendTo('body');
                p.load('?module=transferInfo&id=' + transfer_id, function() {
                    var d = $(this).find('.dialog');
                    d.on('afterSubmit', function(e, r) {
                        if (r.status === 'ok') {
                            var $list = $('.s-stocks-transfers');
                            var tmp = $('<div>').html(r.data.html);
                            var item = $('.s-transfer-item[data-id="' + r.data.transfer.id  + '"]', tmp).addClass('highlighted');
                            $('.s-transfer-item[data-id="' + r.data.transfer.id  + '"]', $list).replaceWith(item);
                        }
                    });
                });
            });

            container.on('click', '.s-transfer-list-sort', function () {
                var el = $(this);
                var container_id = container.attr('id');
                container.wrap('<div id="'+container_id+'-wrapper"></div>');
                var wrapper = $("#" + container_id + '-wrapper');
                wrapper.load('?module=transfer&action=list&sort=' + el.data('sort') + '&order=' + el.data('order'), function () {
                    container.remove();
                    wrapper.children().first().unwrap();
                    wrapper.remove();
                });
            });

            // transfer info
            container.on('click', '.s-transfer-info', function () {
                var el = $(this);
                var transfer_id = el.data('id');
                container.trigger('info', [transfer_id]);
            });
        })
    </script>
<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['list']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['lazyloading']->value;?>

<?php }?>

</div>
<?php }} ?>