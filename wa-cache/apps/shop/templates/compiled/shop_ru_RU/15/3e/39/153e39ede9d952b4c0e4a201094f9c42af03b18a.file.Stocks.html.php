<?php /* Smarty version Smarty-3.1.14, created on 2017-09-28 17:46:38
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-apps\shop\templates\actions\stocks\Stocks.html" */ ?>
<?php /*%%SmartyHeaderCode:2379559cd0b4e6706b0-14372759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '153e39ede9d952b4c0e4a201094f9c42af03b18a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-apps\\shop\\templates\\actions\\stocks\\Stocks.html',
      1 => 1506500544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2379559cd0b4e6706b0-14372759',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'transfers' => 0,
    'tab' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59cd0b4e6f53d0_67170203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cd0b4e6f53d0_67170203')) {function content_59cd0b4e6f53d0_67170203($_smarty_tpl) {?><div class="block double-padded" id="s-stocks-container">

    <h1>Склады</h1>

    <div style="margin: 20px 0">
        <a href="javascript:void(0);" id="s-transfer-product" class="bold"><i class="icon16 move"></i> Новый трансфер</a>

        <div class="s-stocks-transfers" style="margin: 20px 0 0;" <?php if ($_smarty_tpl->tpl_vars['transfers']->value['count']<=0){?>data-empty="1"<?php }?>>
            <?php echo $_smarty_tpl->tpl_vars['transfers']->value['html'];?>

        </div>

        <?php if ($_smarty_tpl->tpl_vars['transfers']->value['rest_count']>0){?>
            <div class="s-stocks-transfers-show-all-wrapper block half-padded">
                <a href="javascript:void(0)" class="s-stocks-transfers-show-all inline-link gray"><b><i><?php echo sprintf('Показать все выполненные трансферы (%d)',$_smarty_tpl->tpl_vars['transfers']->value['rest_count']);?>
</i></b></a>
                <i class="icon16 loading" style="display: none;"></i>
            </div>
        <?php }?>

    </div>

    <ul class="tabs s-stocks-tabs">
        <li class="s-menu-item <?php if ($_smarty_tpl->tpl_vars['tab']->value==='balance'){?>selected<?php }?>" data-tab="balance">
            <a class="s-menu-item-link" data-tab="balance" href="#/stocks/">Остатки по складам</a>
        </li>
        <li class="s-menu-item <?php if ($_smarty_tpl->tpl_vars['tab']->value==='log'){?>selected<?php }?>" data-tab="log">
            <a class="s-menu-item-link" data-tab="log" href="#/stockslog/">Журнал изменений остатков</a>
        </li>
    </ul>
    <div class="tab-content s-stocks-tab-content">
        <div class="block not-padded s-tab-block" data-tab="balance" <?php if ($_smarty_tpl->tpl_vars['tab']->value!=='balance'){?>style="display: none"<?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['tab']->value==='balance'){?><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<?php }?>
        </div>
        <div class="block not-padded s-tab-block" data-tab="log" <?php if ($_smarty_tpl->tpl_vars['tab']->value!=='log'){?>style="display: none"<?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['tab']->value==='log'){?><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<?php }?>
        </div>
    </div>
</div>

<script>
    $(function () {
        var container = $('#s-stocks-container');
        var menu = $('.s-stocks-tabs', container);
        var loadTab = function (tab, params) {
            var block = $('.s-tab-block[data-tab="' + tab + '"]', container);
            if (!block.length) {
                return;
            }
            $('.s-tab-block', container).hide();
            block.show().html('<i class="icon16 loading"></i>').load('?module=stocks&action=' + tab + (params ? '&' + params : ''));
            menu.find('.selected').removeClass('selected');
            menu.find('.s-menu-item[data-tab="' + tab + '"]').addClass('selected');
        };
        $('.s-class-menu-item-link', menu).click(function () {
            var li = $(this).closest('.s-menu-item');
            if (!li.hasClass('selected')) {
                var tab = $(this).data('tab');
                loadTab(tab);
            }
        });

        // interface
        container.bind('load', function (e, tab, params) {
            loadTab(tab, params);
        });

        // new transfer
        $('#s-transfer-product').click(function () {
            var d = $('#s-transfer-product-dialog');
            if (d.length) {
                d.parent().remove();
            }
            var p = $('<div></div>').appendTo('body');
            p.load('?module=transfer', function() {
                var d = $(this).find('.dialog');
                d.on('afterSubmit', function(e, r) {
                    var $list = $('.s-stocks-transfers');
                    if ($list.data('empty')) {
                        $list.data('empty', 0);
                        $list.html(r.data.html);
                        $('.s-transfer-item[data-id="' + r.data.transfer.id + '"]', $list).addClass('highlighted');
                    } else {
                        var tmp = $('<div>').html(r.data.html);
                        var item = $('.s-transfer-item[data-id="' + r.data.transfer.id + '"]', tmp).addClass('highlighted');
                        $list.find('tbody').prepend(item);
                    }
                });
            });
        });

        <?php if ($_smarty_tpl->tpl_vars['transfers']->value['rest_count']>0){?>
            $('.s-stocks-transfers-show-all', container).click(function () {
                $('.s-stocks-transfers-show-all-wrapper', container).find('.loading').show();
                var limit = <?php echo $_smarty_tpl->tpl_vars['transfers']->value['count'];?>
 + <?php echo $_smarty_tpl->tpl_vars['transfers']->value['limit'];?>
;
                var url = '?module=transfer&action=list&sort=create_datetime&order=desc&limit=' + limit;
                $('.s-stocks-transfers', container).load(url, function () {
                    $('.s-stocks-transfers-show-all-wrapper', container).hide();
                });
            });
        <?php }?>

    });
</script>
<?php }} ?>