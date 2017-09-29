<?php /* Smarty version Smarty-3.1.14, created on 2017-09-28 17:55:59
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-data\public\shop\themes\default\category.html" */ ?>
<?php /*%%SmartyHeaderCode:1950959cd0d7f3116e8-32940909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ab5aff37664400ddbe772f033bb1d731e87de53' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-data\\public\\shop\\themes\\default\\category.html',
      1 => 1506500773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1950959cd0d7f3116e8-32940909',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'frontend_category' => 0,
    '_' => 0,
    'products' => 0,
    'filters' => 0,
    'category' => 0,
    'seen_ids' => 0,
    'wa' => 0,
    'p' => 0,
    'wa_theme_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59cd0d7f4460a0_04157534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cd0d7f4460a0_04157534')) {function content_59cd0d7f4460a0_04157534($_smarty_tpl) {?>		<div class="block_img_kat">
			<div class="wrap container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="rext_b_g_k">
							<h2>Экологически чистые швабры</br>
для плоских поверхностей</h2>


						</div>
					</div>
				</div>
			</div>
		</div>

<!-- plugin hook: 'frontend_category' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>




<?php if (!$_smarty_tpl->tpl_vars['products']->value){?>
    <?php if (!empty($_smarty_tpl->tpl_vars['filters']->value)){?>
        Не найдено ни одного товара.
    <?php }else{ ?>
        В этой категории нет ни одного товара.
    <?php }?>
<?php }else{ ?>
    <?php echo $_smarty_tpl->getSubTemplate ('list-thumbs.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sorting'=>!empty($_smarty_tpl->tpl_vars['category']->value['params']['enable_sorting'])), 0);?>

    
<?php }?>





	<div class="b_k">
					<div class="wrap container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="block_img_katalog">

								</div>
							</div>
						</div>
					</div>
				</div>




	<?php $_smarty_tpl->tpl_vars['seen_ids'] = new Smarty_variable(array(), null, 0);?>
<?php if (!empty(waRequest::cookie('seen_products'))){?>
<?php $_smarty_tpl->tpl_vars['seen_ids'] = new Smarty_variable(array_unique(explode(",",waRequest::cookie('seen_products'))), null, 0);?>
<?php $_smarty_tpl->tpl_vars['seen_ids'] = new Smarty_variable(implode(",",$_smarty_tpl->tpl_vars['seen_ids']->value), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['seen_ids']->value){?>			
				
			<div class="karusel">
		<div class="wrap container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

					<h2 class="h2">Просмотренные</h2>
					<div class="owl-carousel">
					
					
					
					
					<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?>
					
					
                                <?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->products("id/".((string)$_smarty_tpl->tpl_vars['seen_ids']->value)), null, 0);?>
                                
                                
                                <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>

	                    <div>
							<ul class="kat_li">
								<li>
									<p><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['p']->value,'200',array('itemprop'=>'image','alt'=>$_smarty_tpl->tpl_vars['p']->value['name'],'default'=>((string)$_smarty_tpl->tpl_vars['wa_theme_url']->value)."img/dummy200.png"));?>
</a></p>
									<p class="kat_name_tov"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</a></p>
									<p class="text_grey_kat">SPA Care</p>
									<p class="price"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['price']);?>
 руб.</p>
									<p><button class="button">Купить в один клик</button></p>
									<p class="podrobnee"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
">Подробнее</a></p>
								</li>
							</ul>
                    	</div>
                    <?php } ?>
                                
                                
                                
                               
                        <?php }?>
					
					
					</div>
				</div>

			</div>
		</div>
	</div>
<?php }?>
	

	<?php }} ?>