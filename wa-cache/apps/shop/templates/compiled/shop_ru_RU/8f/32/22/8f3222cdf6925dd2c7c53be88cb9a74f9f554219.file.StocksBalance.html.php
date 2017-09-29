<?php /* Smarty version Smarty-3.1.14, created on 2017-09-28 17:46:38
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-apps\shop\templates\actions\stocks\StocksBalance.html" */ ?>
<?php /*%%SmartyHeaderCode:2103759cd0b4e29fcd7-65201508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f3222cdf6925dd2c7c53be88cb9a74f9f554219' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-apps\\shop\\templates\\actions\\stocks\\StocksBalance.html',
      1 => 1506500544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2103759cd0b4e29fcd7-65201508',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_stocks' => 0,
    'stocks' => 0,
    'stock' => 0,
    'sort' => 0,
    'sort_key' => 0,
    'order' => 0,
    'count' => 0,
    'total_count' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59cd0b4e407324_52382292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cd0b4e407324_52382292')) {function content_59cd0b4e407324_52382292($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['product_stocks']->value)){?>

    <table class="zebra" id="s-product-stocks">
        <tr class="header white">
            <th colspan=2>&nbsp;</th>
            <?php  $_smarty_tpl->tpl_vars['stock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stock']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stock']->key => $_smarty_tpl->tpl_vars['stock']->value){
$_smarty_tpl->tpl_vars['stock']->_loop = true;
?>
                <th><?php $_smarty_tpl->tpl_vars['sort_key'] = new Smarty_variable(('stock_count_').($_smarty_tpl->tpl_vars['stock']->value['id']), null, 0);?><a href="#/stocks/stock_count_<?php echo $_smarty_tpl->tpl_vars['stock']->value['id'];?>
_<?php if ($_smarty_tpl->tpl_vars['sort']->value==$_smarty_tpl->tpl_vars['sort_key']->value&&$_smarty_tpl->tpl_vars['order']->value=='asc'){?>desc<?php }else{ ?>asc<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stock']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['sort']->value==$_smarty_tpl->tpl_vars['sort_key']->value){?><i class="icon16 <?php if ($_smarty_tpl->tpl_vars['order']->value=='desc'){?>darr<?php }else{ ?>uarr<?php }?>"></i><?php }?></a></th>
            <?php } ?>
            <th><a href="#/stocks/<?php if ($_smarty_tpl->tpl_vars['sort']->value==='count'&&$_smarty_tpl->tpl_vars['order']->value=='asc'){?>desc<?php }else{ ?>asc<?php }?>/" class="s-sort-handler bold">Все склады<?php if ($_smarty_tpl->tpl_vars['sort']->value==='count'){?><i class="icon16 <?php if ($_smarty_tpl->tpl_vars['order']->value=='desc'){?>darr<?php }else{ ?>uarr<?php }?>"></i><?php }?></a></th>
        </tr>
    </table>

    <div class="lazyloading-wrapper">
        <div class="lazyloading-progress-string"><?php echo _w('%d product','%d products',$_smarty_tpl->tpl_vars['count']->value);?>
&nbsp;<?php echo sprintf(_w('of %d'),$_smarty_tpl->tpl_vars['total_count']->value);?>
</div><br>
        <a href="javascript:void(0);" class="lazyloading-link" <?php if ($_smarty_tpl->tpl_vars['count']->value>=$_smarty_tpl->tpl_vars['total_count']->value){?>style="display:none;"<?php }?>>Показать больше товаров</a>
            <span class="lazyloading-progress" style="display:none">
                <i class="icon16 loading"></i> Загрузка <span class="lazyloading-chunk"><?php echo _w('%d product','%d products',min($_smarty_tpl->tpl_vars['total_count']->value-$_smarty_tpl->tpl_vars['count']->value,$_smarty_tpl->tpl_vars['count']->value));?>
...</span>
            </span>
    </div>

<?php }else{ ?>
    <p>Добавьте хотя бы один склад в настройках магазина, чтобы этот раздел заработал.</p>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['product_stocks']->value)){?>

    
    
    <script type="text/html" id="template-product-stocks">
        {% var data = o.product_stocks; %}
        {% for (var i = 0, sz = data.length; i < sz; i += 1) { %}
            {% var product = data[i], skus = product.skus, stocks = product.stocks; %}
            {% var sku_count = skus.length; %}
            <tr>
                {% var hash = "#/product/"+product.id+"/"; %}
                <td class="s-product min-width">
                    <a href="{%#hash%}">
                        {% if (product.url_crop_small) { %}
                            <img src="{%#product.url_crop_small%}">
                        {% } else { %}
                            <img src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/image-dummy-small.png" class="not-found">
                        {% } %}
                    </a>
                </td>

                <td class="s-product">
                    <a href="{%#hash%}">{%=product.name%}</a>
                </td>

                <!-- detailed by stocks -->
                {% for (var k = 0, l = stocks.length; k < l; k += 1) { %}
                    {% var stock_id = o.stocks[k].id; %}
                    <td class="s-stock-cell" data-stock-id="{%#stock_id%}">
                        {% stock_skus = stocks[k]; %}
                        <ul class="menu-v">
                            {% for (var j = 0, n = stock_skus.length; j < n; j += 1) { %}
                                {% var sku_id = stock_skus[j].id; %}
                                {% if (stock_skus[j].num_of_stocks > 0) { %}
                                    <li id="s-item-{%#sku_id%}-{%#stock_id%}" class="item {% if (stock_skus[j].count === null) { %}infinity{% } %}">{%#stock_skus[j].icon%}
                                        {% if (sku_count > 1) { %}
                                        <a href="{%#hash+'edit/focus=stock&sku='+sku_id+'&stock='+stock_id%}">{%=stock_skus[j].name%}</a>
                                        {% } %}
                                        {% if (stock_skus[j].count !== null) { %}{%#stock_skus[j].count%}{% } else { %}∞{% } %}
                                    </li>
                                {% } else { %}
                                    <li class="gray">&mdash;</li>
                                {% } %}
                            {% } %}
                        </ul>
                    </td>
                {% } %}

                <td><ul class="menu-v">
                    {% for (var k = 0, l = skus.length; k < l; k += 1) { %}
                        <li>{%#skus[k].icon%}
                            {% if (sku_count > 1) { %}
                                <a href="{%#hash+'edit/focus=price&sku='+skus[k].id%}">{%=skus[k].name%}</a>
                            {% } %}
                            <strong>{% if (skus[k].count !== null) { %}{%#skus[k].count%}{% } else { %}∞{% } %}</strong>
                        </li>
                    {% } %}
                </ul></td>

            </tr>
        {% } %}
    </script>
    

    
    
    <script type="text/html" id="template-product-stocks-sku-list">
        {% var skus = o.skus; %}
        {% var hash = "#/product/"+o.product.id+"/edit/"; %}
        <ul class="menu-v">
            {% for (var k = 0, sku_count = skus.length; k < sku_count; k += 1) { %}
                {% var sku_id = skus[k].id; %}
                {% if (skus[k].num_of_stocks > 0) { %}
                    <li id="s-item-{%#sku_id%}-{%#o.stock.id%}" class="item {% if (skus[k].count === null) { %}infinity{% } %}">{%#skus[k].icon%}
                        {% if (sku_count > 1) { %}
                            <a href="{%#hash+'edit/focus=stock&sku='+sku_id+'&stock='+o.stock.id%}" class="small">{%=skus[k].name%}</a>
                        {% } %}
                        <strong>{% if (skus[k].count !== null) { %}{%#skus[k].count%}{% } else { %}∞{% } %}</strong>
                    </li>
                {% } else { %}
                    <li>&mdash;</li>
                {% } %}
            {% } %}
        </ul>
    </script>
    

    <script type="text/javascript">
        document.title = '<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr(("Склады").(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
        $.product_stocks.init({
            product_stocks: <?php echo json_encode($_smarty_tpl->tpl_vars['product_stocks']->value);?>
,
            stocks: <?php echo json_encode($_smarty_tpl->tpl_vars['stocks']->value);?>
,
            order: '<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
',
            lazy_loading: {
                auto: true,
                count: <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
,
                total_count: <?php echo $_smarty_tpl->tpl_vars['total_count']->value;?>

            }
        });
    </script>

<?php }?>
<?php }} ?>