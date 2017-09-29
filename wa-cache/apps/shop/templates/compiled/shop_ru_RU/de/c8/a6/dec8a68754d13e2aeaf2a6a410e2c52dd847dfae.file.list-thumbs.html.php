<?php /* Smarty version Smarty-3.1.14, created on 2017-09-27 15:30:19
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-data\public\shop\themes\default\list-thumbs.html" */ ?>
<?php /*%%SmartyHeaderCode:1022559cb99db2374e7-90657705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dec8a68754d13e2aeaf2a6a410e2c52dd847dfae' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-data\\public\\shop\\themes\\default\\list-thumbs.html',
      1 => 1506500773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1022559cb99db2374e7-90657705',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_sort' => 0,
    'wa' => 0,
    'sort_fields' => 0,
    'sort' => 0,
    'name' => 0,
    'category' => 0,
    'catcount' => 0,
    'theme_settings' => 0,
    'products' => 0,
    'p' => 0,
    'pages_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59cb99db3bdf49_76593148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cb99db3bdf49_76593148')) {function content_59cb99db3bdf49_76593148($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_pagination')) include 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-system/vendors/smarty-plugins\\function.wa_pagination.php';
?><!-- products thumbnail list view -->


    <!-- sorting -->
    <?php $_smarty_tpl->tpl_vars['sort_fields'] = new Smarty_variable(array('price'=>'Цена','total_sales'=>'Хиты продаж','create_datetime'=>'Новинки','compare_price'=>'Скидки','rating'=>'Отзывы'), null, 0);?>
    <?php if (!isset($_smarty_tpl->tpl_vars['active_sort']->value)){?>
        <?php $_smarty_tpl->tpl_vars['active_sort'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->get('sort','create_datetime'), null, 0);?>
    <?php }?>
   
			<div class="block_s">
			<div class="wrap container">
				<div class="row">
					<div class="col-xs-12 col-s m-12 col-md-6 col-lg-6">
						<ul class="sort_block">
							<li><span>Сортировать по:</span></li>
							
							<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sort_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
            <li<?php if ($_smarty_tpl->tpl_vars['active_sort']->value==$_smarty_tpl->tpl_vars['sort']->value){?> class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->sortUrl($_smarty_tpl->tpl_vars['sort']->value,$_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl->tpl_vars['active_sort']->value);?>
</li>
            <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('sort')==$_smarty_tpl->tpl_vars['sort']->value){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->title((($_smarty_tpl->tpl_vars['wa']->value->title()).(' — ')).($_smarty_tpl->tpl_vars['name']->value));?>
<?php }?>
        <?php } ?>
							
							
							
						</ul>
					</div>
					
					<?php $_smarty_tpl->tpl_vars['cid'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value['id'], null, 0);?>
				<?php $_smarty_tpl->tpl_vars['catcount'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productsCount("category/".((string)$_smarty_tpl->tpl_vars['cid']->value)), null, 0);?>
					
					
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-md-offset-3 col-lg-offset-3">
						<ul class="sort_block_view">
							<li><span><?php echo $_smarty_tpl->tpl_vars['catcount']->value;?>
</span><span> товаров в наличии</span></li>
								<li><i class="fa fa-th-large active" aria-hidden="true"></i></li>
								<li><i class="fa fa-list-ul" aria-hidden="true"></i></li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	
	
	


<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->cart->total()>0){?><?php $_smarty_tpl->tpl_vars['add2cart_label'] = new Smarty_variable('В корзину', null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['add2cart_label'] = new Smarty_variable('Купить', null, 0);?><?php }?>

<div class="wrap container">
		<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">



<ul class="kat_li kat kaklist">
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['list_features'])){?>
    <?php $_smarty_tpl->tpl_vars['features'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->features($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['iteration']++;
?>
    <?php $_smarty_tpl->tpl_vars['available'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['p']->value['count']===null||$_smarty_tpl->tpl_vars['p']->value['count']>0, null, 0);?>
    <li>
	
	
	
	
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgUrl($_smarty_tpl->tpl_vars['p']->value,'200');?>
"></a></p>
					<p class="kat_name_tov"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</a></p>
					<p class="text_grey_kat">SPA Care</p>
					<p class="price"><?php echo $_smarty_tpl->tpl_vars['p']->value['price'];?>
 руб.</p>
					<a href="#second-popup" class="second-popup-link button open-popup-link">Купить в один клик</a>
					<p class="podrobnee"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
">Подробнее</a>
</p>
	
	

       
    </li>
    
    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['iteration']==8){?>
    <div class="row over_shop">
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<div class="img_shop">1</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
						<div class="info_shop">
						<?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>

							
						</div>
					</div>
				</div>
    
    <?php }?>
<?php } ?>
</ul>


 <ul style="display:none;" class="kat_li kat kat_table">
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['list_features'])){?>
    <?php $_smarty_tpl->tpl_vars['features'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->features($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['iteration']++;
?>
    <?php $_smarty_tpl->tpl_vars['available'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['p']->value['count']===null||$_smarty_tpl->tpl_vars['p']->value['count']>0, null, 0);?>
	
	
	<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['p']['iteration'];?>

    <li>
				<div class="et">
					<div class="lt">
						<a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgUrl($_smarty_tpl->tpl_vars['p']->value,'200');?>
"></a>
						<p class="kat_name_tov"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</a></p>
						<p class="text_grey_kat">SPA Care</p>
						<p class="price"><?php echo $_smarty_tpl->tpl_vars['p']->value['price'];?>
 руб.</p>
					</div>
					<div class="rt">
						<a href="#second-popup" class="second-popup-link button open-popup-link">Купить в один клик</a>
						<p class="podrobnee"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
">Подробнее</a></p>
					</div>
					</div>
    </li>
    
       <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['iteration']==8){?>
    <div class="row over_shop">
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<div class="img_shop">1</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
						<div class="info_shop">
						<?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>

							
						</div>
					</div>
				</div>
    
    <?php }?>
    
    
<?php } ?>
</ul>
		</div>
	</div>
</div>







<?php if (isset($_smarty_tpl->tpl_vars['pages_count']->value)&&$_smarty_tpl->tpl_vars['pages_count']->value>1){?>
<div class="number_s">
				<div class="wrap container">
					<div class="row">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="navigation_f">
								<?php echo smarty_function_wa_pagination(array('total'=>$_smarty_tpl->tpl_vars['pages_count']->value,'attrs'=>array('class'=>"namber")),$_smarty_tpl);?>

						</div>
						</div>
					</div>
				</div>
</div>
<?php }?>



<script>
$( ".fa-list-ul" ).click(function() {

	$('.fa-list-ul').addClass('active');
	$('.fa-th-large').removeClass('active');
	$('.kat_table').show();
	$('.kaklist').hide();
});
$( ".fa-th-large" ).click(function() {

	$('.fa-list-ul').removeClass('active');
	$('.fa-th-large').addClass('active');
	$('.kat_table').hide();
	$('.kaklist').show();
});
</script>



<?php }} ?>