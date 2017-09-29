<?php /* Smarty version Smarty-3.1.14, created on 2017-09-28 15:52:22
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-data\public\shop\themes\default\main.html" */ ?>
<?php /*%%SmartyHeaderCode:2490059cb99db6a42f9-73872293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c07547f33fa7185232b9cd48fafded532b6c863' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-data\\public\\shop\\themes\\default\\main.html',
      1 => 1506603137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2490059cb99db6a42f9-73872293',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59cb99db7e09b7_27696038',
  'variables' => 
  array (
    'wa' => 0,
    'products' => 0,
    'p' => 0,
    'wa_theme_url' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cb99db7e09b7_27696038')) {function content_59cb99db7e09b7_27696038($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-system\\vendors\\smarty3\\plugins\\modifier.truncate.php';
?><div class="block_img">
		<div class="wrap container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="rext_b_g">
						<h2>Экологическая уборка, облегчающая жизнь</h2>
						<p>Улучшение очистки - вот что нас больше всего волнует. Начиная с уникальных свойств микроволокон, мы разработали ряд продуктов высшего класса, многие из которых имеют собственные запатентованные решения. Для умной очистки, которая оставляет вас с
							течением времени для других вещей.</p>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="block_f">
		<div class="wrap container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-lg-offset-1 col-md-offset-1">
					<ul class="f_b">
						<li class="li_p_f1">
							<p>Гарантия качества</p>
							<p>Сделано в Швеции</p>
						</li>
						<li class="li_p_f2">
							<p>Популярные товары</p>
							<p>Только качественные товары</p>
						</li>
						<li class="li_p_f3">
							<p>Скидки</p>
							<p>Всегда выгодно</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="wrap container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h2 class="h2">Хиты продаж</h2>
			</div>
		</div>
	</div>

	<div class="karusel">
		<div class="wrap container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


					<div class="owl-carousel">
						
						<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?>
                                <?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productSet("bestsellers"), null, 0);?>
                                
                                
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
	<div class="karusel skidki">
		<div class="wrap container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

					<h2 class="h2">Скидка дня</h2>
					<div class="owl-carousel">
					
					
					
					
					<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?>
                                <?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productSet("skidkadna"), null, 0);?>
                                
                                
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
	<div class="wrap container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h2 class="h2">Новые поступления</h2>
			</div>
		</div>
	</div>
	<div class="karusel">
		<div class="wrap container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


					<div class="owl-carousel">
							<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?>
                                <?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productSet("skidkadna"), null, 0);?>
                                
                                
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

	<div class="new_block">
		<div class="wrap container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h2 class="h2">Новости</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="news_block">
		<div class="wrap container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<ul class="new_ul">

                       <?php $_smarty_tpl->tpl_vars['post'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->posts(1,4), null, 0);?>
                                
                                
						<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
							<li>
								
								<h3><?php echo $_smarty_tpl->tpl_vars['p']->value['title'];?>
</h3>
								<p class="text_new"><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['p']->value['text']),124);?>
</p>
								<p class="new_a"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['link'];?>
">Читать полностью</a><span>&rarr;</span></p>
								<p class="blue_str"></p>
							</li>
						<?php } ?>


					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="preim_block">
		<div class="wrap container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<ul class="pr_b_ul">
						<li>
							<p class="c1"></p>
							<h3 class="h3">Удобная доставка</h3>
							<p class="text_preimy">Мы предлагаем широкий выбор способов получения заказа</p>
						</li>
						<li>
							<p class="c2"></p>
							<h3 class="h3">Удобная доставка</h3>
							<p class="text_preimy">Мы предлагаем широкий выбор способов получения заказа</p>
						</li>
						<li>
							<p class="c3"></p>
							<h3 class="h3">Удобная доставка</h3>
							<p class="text_preimy">Мы предлагаем широкий выбор способов получения заказа</p>
						</li>
						<li>
							<p class="c4"></p>
							<h3 class="h3">Удобная доставка</h3>
							<p class="text_preimy">Мы предлагаем широкий выбор способов получения заказа</p>
						</li>

					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="over_shop">
		<div class="wrap container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<div class="img_shop"></div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
					<div class="info_shop">
						<h2>Информация о магазине</h2>
						<p>Swedes use about 50,000 tons of cleaners every year. A majority of the cleaners burden our water purification plants and Show inline popup</a>Show inline popup</a>
							Open popup</a> the environment unnecessarily. This is due in part to using an excessive amount of chemicals and that many of them are very toxic. Some cleaners also have ingredients that interrupt the biological decomposition process in purifying
							plants. Ingredients that are not taken care of in the process go straight out into the environment where they damage the ecosystem. The products included in Smart’s cleaning range clean quickly and efficiently without chemicals.</p>
					</div>






				</div>
			</div>
		</div>
	</div><?php }} ?>