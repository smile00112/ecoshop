<?php /* Smarty version Smarty-3.1.14, created on 2017-09-27 15:41:43
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-data\public\site\themes\default\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2046559cb9c873a6fe3-91415038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64dc044233fa1e089f2bec1d26212de2d65a07c4' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-data\\public\\site\\themes\\default\\index.html',
      1 => 1506500793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2046559cb9c873a6fe3-91415038',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_theme_url' => 0,
    'wa_static_url' => 0,
    'wa_theme_version' => 0,
    'wa_active_theme_path' => 0,
    'frontend_homepage' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59cb9c87479f17_36748696',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cb9c87479f17_36748696')) {function content_59cb9c87479f17_36748696($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->title(), ENT_QUOTES, 'UTF-8', true);?>
</title>
    <meta name="Keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->meta('keywords'), ENT_QUOTES, 'UTF-8', true);?>
" />
    <meta name="Description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->meta('description'), ENT_QUOTES, 'UTF-8', true);?>
" />
	<link rel="shortcut icon" href="/favicon.ico"/>
    <meta content="" property="og:image" />
	<meta content="" property="og:description" />
	<meta content="" property="og:site_name" />
	<meta content="website" property="og:type" />
	<meta content="telephone=no" name="format-detection" />
	<meta http-equiv="x-rim-auto-match" content="none">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/flexboxgrid.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/fonts.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
plagin/Magnific-Popup-master/dist/magnific-popup.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
plagin/OwlCarousel2-2.2.1/dist/assets/owl.theme.default.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
plagin/OwlCarousel2-2.2.1/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/main.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
css/media.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
plagin/animate/animate.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   
    

    <!-- css -->
  
   
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>
 


    <!-- js -->
	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!--<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery/jquery-1.11.1.min.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery/jquery-migrate-1.2.1.min.js"></script>-->
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
default.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script>

    <?php echo $_smarty_tpl->tpl_vars['wa']->value->js();?>
 

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <?php echo $_smarty_tpl->tpl_vars['wa']->value->head();?>
 


</head>
<body>



<div class="wrapper">
	<div class="content">
	<div class="head_black">
		<div class="wrap container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="cont_head_black">
						<p class="region_span">Ваш регион - Московская область?</p>
						<span class="yes_butt">Да</span>
						<a href="#test-popup" class="no_butt open-popup-link">Нет</a>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="head_grey">
		<div class="wrap container">
			<div class="row">
				<div class="col-xs-12 col-sm-7 col-md-5 col-lg-5">
					<div class="cont_head_grey">
						<div class="head_grey_bl_one">
							<p class="region_span_grey">Москва и Подмосковье</p>
							<a href="" class="region_a_grey">Адреса магазинов в Вашем регионе</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-5 col-md-7 col-lg-7">
					<div class="avtor_reg">
						<a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->loginUrl();?>
">Войти</a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->signupUrl();?>
">Зарегистрироваться</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="head_g">
		<div class="wrap container">
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
					<div class="mobyle_logo_block">
						<p class="p_logo"><a href="/" class="logo"></a></p>

						<div class="block_basket_mobyle">
							<p class="p_basket"><a href="" class="icon_basket"></a>
								<span class="mobyle_kol_tov">1</span></p>

						</div>
						<div class="menu_mobyle">
							<button class="menu-btn">&#9776;</button>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
					<p class="call_text">Круглосуточный бесплатный телефон</p>
					<p class="namber_text">8-800-100-10-10</p>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
					<div class="block_search">
					
					
					
			<form method="get" action="/search/" >
           	<input type="text" class="serch_in">
           	<button type="button" name="button" class="search_but"></button>
			</form>	
					
					
					
					
					</div>
				</div>
				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-lg-offset-1 col-md-offset-1">
					<div class="block_basket">
						<p class="p_basket"><a href="" class=""></a>
							<p class="block_basket_text">Ваша корзина ещё пуста</p>
							<!-- <div><p class="col_tov_basket">Кол-во товаров: <span>5</span></p>
					<p class="col_tov_basket">На сумму <span>1256 руб</span> </p></div> -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="menu_block">
		<div class="wrap container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<ul class="menu_desktop" id="navigation">
						<li class="mini_logo">

						</li>
						<li><a href="#">Каталог товаров</a>
							<ul>
								<li><a href="#" class="a_bold">Популярное</a>
									<ul>
										<li><a href="">Салфетки</a></li>
										<li><a href="">Швабры</a></li>
										<li><a href="">Щетки</a></li>
										<li><a href="">Ковры</a></li>
										<li><a href="">Полотенца</a></li>
										<li><a href="">Полотенца</a></li>
										<li><a href="">Полотенца</a></li>
										<li><a href="">Полотенца</a></li>
									</ul>
								</li>
								<li><a href="#" class="a_bold">Изделия из дерева </a>
									<ul>
										<li><a href="">Салфетки</a></li>
										<li><a href="">Швабры</a></li>
										<li><a href="">Щетки</a></li>
										<li><a href="">Ковры</a></li>
										<li><a href="">Полотенца</a></li>
									</ul>
								</li>
								<li><a href="#" class="a_bold">Уборка кухни</a>
									<ul>
										<li><a href="">Салфетки</a></li>
										<li><a href="">Швабры</a></li>
										<li><a href="">Щетки</a></li>
										<li><a href="">Ковры</a></li>
										<li><a href="">Полотенца</a></li>
									</ul>
								</li>
								<li><a href="#" class="a_bold">Оконные инструменты</a>
									<ul>
										<li><a href="">Салфетки</a></li>
										<li><a href="">Швабры</a></li>
										<li><a href="">Щетки</a></li>
										<li><a href="">Ковры</a></li>
										<li><a href="">Полотенца</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="#">Услуги </a>

						</li>
						<li><a href="#">Информация для покупателей </a></li>
						<li><a href="#">Новости компании</a></li>
						<li><a href="#">Для оптовых клиентов</a></li>
						<li class="phone_mini">
							<p>8-800-100-10-10</p>
						</li>
						<li class="search_mini">
							<input type="checkbox" class="serch_in" id="toggle">
							<label for="toggle" class="search_but"></label>
							<input type="text" class="serch_in to-be-changed animated bounceIn">

						</li>
						<li class="block_panel_basket">
							<p class="p_basket"><a href="" class="icon_basket"></a>
								<span class="mobyle_kol_tov panel_kol_tov">1</span></p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<nav class="pushy pushy-right" data-focus="#first-link">
		<div class="pushy-content">
			<ul>
				<li class="pushy-submenu">
					<button id="first-link">Популярное</button>
					<ul>
						<li class="pushy-link"><a href="#">Салфетки</a></li>
						<li class="pushy-link"><a href="#">Швабры</a></li>
						<li class="pushy-link"><a href="#">Щетки</a></li>
						<li class="pushy-link"><a href="#">Ковры</a></li>
						<li class="pushy-link"><a href="#">Полотенца</a></li>
					</ul>
				</li>
				<li class="pushy-submenu">
					<button>Изделия из дерева</button>
					<ul>
						<li class="pushy-link"><a href="#">Салфетки</a></li>
						<li class="pushy-link"><a href="#">Швабры</a></li>
						<li class="pushy-link"><a href="#">Щетки</a></li>
						<li class="pushy-link"><a href="#">Ковры</a></li>
						<li class="pushy-link"><a href="#">Полотенца</a></li>
					</ul>
				</li>
				<li class="pushy-submenu">
					<button>Уборка кухни</button>
					<ul>
						<li class="pushy-link"><a href="#">Салфетки</a></li>
						<li class="pushy-link"><a href="#">Швабры</a></li>
						<li class="pushy-link"><a href="#">Щетки</a></li>
						<li class="pushy-link"><a href="#">Ковры</a></li>
						<li class="pushy-link"><a href="#">Полотенца</a></li>
					</ul>
				</li>
				<li class="pushy-submenu">
					<button>Оконные инструменты</button>
					<ul>
						<li class="pushy-link"><a href="#">Салфетки</a></li>
						<li class="pushy-link"><a href="#">Швабры</a></li>
						<li class="pushy-link"><a href="#">Щетки</a></li>
						<li class="pushy-link"><a href="#">Ковры</a></li>
						<li class="pushy-link"><a href="#">Полотенца</a></li>
					</ul>
				</li>

			</ul>
		</div>
	</nav>
	<div class="site-overlay"></div>

	
	<?php if (isset($_smarty_tpl->tpl_vars['frontend_homepage']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>
	
	<?php if (!isset($_smarty_tpl->tpl_vars['frontend_homepage']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	
	
	
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
	<?php }?>
	<div class="rassilka_block">
		<div class="wrap container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="r_block">
						<div class="r1">Подпишись и получи </br>
							скидку в 5 процентов</div>
						<div class="r2">Узнавайте первыми о распродажах и новинках!</div>
						<div class="r3">
							<input type="text" placeholder="Адрес електроной почты">
							<button>Подписаться</button>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
</div>
	<div class="footer">
		<div class="wrap container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<div class="f">
						<p>
							<a class="f_vk" href=""></a>
							<a class="f_tw" href=""></a>
							<a class="f_f" href=""></a>
							<a class="f_goo" href=""></a>
							<a class="f_ok" href=""></a>
						</p>
						<p class="p_logo"><a href="" class="logo"></a></p>

					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
					<div class="footer_menu">
						<div>
							<h3>Каталог товаров</h3>
							<p><a href="">Чистящие средства</a></p>
							<p><a href="">Средства из дерева</a></p>
							<p> <a href="">Средства по уходу за авто</a></p>
							<p> <a href="">Средства по уходу за SPA</a></p>

						</div>
						<div>


							<h3>Информация для покупателей</h3>
							<p><a href="">Window tools</a></p>
							<p><a href="">Window tools</a></p>
							<p> <a href="">Mopsystems & cleaning tools</a></p>
							<p><a href="">Cleaning cloths & sponges</a></p>

						</div>
						<div>
							<h3>Новости компании</h3>
							<p> <a href="">О компании</a></p>
							<p><a href="/blog/">Новости</a></p>
							<p><a href="">Средства по уходу за авто</a></p>
							<p> <a href="">Средства по уходу за SPA</a></p>

						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<p class="copy">© 2004 – 2017 Ecoshot</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="test-popup" class="white-popup mfp-hide region_modal">
	<div class="wrap container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

				<div class="modl_region_block_one">
					<p class="m_p_text">Выберите регион:</p>
					<div class="block_search">
						<input type="text" class="serch_in" placeholder="Область, регион">
						<button type="button" name="button" class="search_but"></button>
					</div>
				</div>
				<div class="reg_list">
					<div class="reg_colm">
						<div>
							<h3>A</h3>
							<p><a href="">Адыгея</a></p>
							<p><a href="">Алтайский край</a></p>
							<p><a href="">Амурская обл</a></p>
							<p><a href="">Астраханская обл.</a></p>
						</div>
						<div>
							<h3>Б</h3>
							<p><a href="">Адыгея</a></p>
							<p><a href="">Алтайский край</a></p>
							<p><a href="">Алтайский край</a></p>

							<p><a href="">Амурская обл</a></p>
							<p><a href="">Астраханская обл.</a></p>
						</div>
						<div>
							<h3>В</h3>
							<p><a href="">Адыгея</a></p>
							<p><a href="">Алтайский край</a></p>
							<p><a href="">Амурская обл</a></p>
							<p><a href="">Астраханская обл.</a></p>
						</div>
					</div>
					<div class="reg_colm">
						<div>
							<h3>A</h3>
							<p><a href="">Адыгея</a></p>
							<p><a href="">Алтайский край</a></p>
							<p><a href="">Амурская обл</a></p>
							<p><a href="">Астраханская обл.</a></p>
							<p><a href="">Астраханская обл.</a></p>
							<p><a href="">Астраханская обл.</a></p>
						</div>
						<div>
							<h3>Б</h3>
							<p><a href="">Адыгея</a></p>
							<p><a href="">Алтайский край</a></p>
							<p><a href="">Алтайский край</a></p>
							<p><a href="">Алтайский край</a></p>
							<p><a href="">Амурская обл</a></p>
							<p><a href="">Астраханская обл.</a></p>
							<p><a href="">Астраханская обл.</a></p>
							<p><a href="">Астраханская обл.</a></p>
							<p><a href="">Астраханская обл.</a></p>
							<p><a href="">Астраханская обл.</a></p>
						</div>
						<div>
							<h3>В</h3>
							<p><a href="">Адыгея</a></p>
							<p><a href="">Алтайский край</a></p>
							<p><a href="">Амурская обл</a></p>
							<p><a href="">Астраханская обл.</a></p>
						</div>
					</div>
					<div class="reg_colm">
						<div>
							<h3>A</h3>
							<p><a href="">Адыгея</a></p>
							<p><a href="">Алтайский край</a></p>
							<p><a href="">Амурская обл</a></p>
							<p><a href="">Астраханская обл.</a></p>
						</div>
						<div>
							<h3>A</h3>
							<p><a href="">Адыгея</a></p>
							<p><a href="">Алтайский край</a></p>
							<p><a href="">Амурская обл</a></p>
							<p><a href="">Астраханская обл.</a></p>
						</div>


						<div>
							<h3>A</h3>
							<p><a href="">Адыгея</a></p>
							<p><a href="">Алтайский край</a></p>
							<p><a href="">Амурская обл</a></p>
							<p><a href="">Астраханская обл.</a></p>
						</div>
						<div>
							<h3>A</h3>
							<p><a href="">Адыгея</a></p>
							<p><a href="">Алтайский край</a></p>
							<p><a href="">Амурская обл</a></p>
							<p><a href="">Астраханская обл.</a></p>
						</div>

					</div>
					<div class="reg_colm">
						<div>
							<h3>A</h3>
							<p><a href="">Адыгея</a></p>
							<p><a href="">Алтайский край</a></p>
							<p><a href="">Амурская обл</a></p>
							<p><a href="">Астраханская обл.</a></p>
						</div>
						<div>
							<h3>Б</h3>
							<p><a href="">Адыгея</a></p>
							<p><a href="">Алтайский край</a></p>
							<p><a href="">Алтайский край</a></p>
							<p><a href="">Алтайский край</a></p>
							<p><a href="">Амурская обл</a></p>
							<p><a href="">Астраханская обл.</a></p>
						</div>
						<div>
							<h3>В</h3>
							<p><a href="">Адыгея</a></p>
							<p><a href="">Алтайский край</a></p>
							<p><a href="">Амурская обл</a></p>
							<p><a href="">Астраханская обл.</a></p>
						</div>
					</div>







				</div>
			</div>
		</div>
	</div>
</div>
	<div id="second-popup" class="mfp-hide white-popup2">
		<h2>Купить в один клик</h2>
		<div class="click_m">
			<img src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/img_primer.jpg">
			<div>
				<p class="med_p_m">Наименование товара</p>
				<p class="med_p_n">Раздел</p>

				<p class="price">1 990 руб.</p>
			</div>

		</div>
		<p class="nam_m">Номер телефона</p>
		<p ><input type="text" placeholder="8-920-600-37-08"></p>
		<p><buttont>Заказать</buttont></p>
	</div>
	

	
	
	<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/pushy.min.js"></script>
	
	<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
plagin/OwlCarousel2-2.2.1/dist/owl.carousel.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
plagin/Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>
    <script defer src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
plagin/woocommerce-FlexSlider/demo/js/jquery.flexslider.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
plagin/starrr-gh-pages/dist/starrr.js"></script>

 <script>
    $('#star1').starrr({
      change: function(e, value){
        if (value) {
          $('.your-choice-was').show();
          $('.choice').text(value);
        } else {
          $('.your-choice-was').hide();
        }
      }
    });

    var $s2input = $('#star2_input');
    $('#star2').starrr({
      max: 10,
      rating: $s2input.val(),
      change: function(e, value){
        $s2input.val(value).trigger('input');
      }
    });
  </script>
	<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails",
				start: function(slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>

	<script>
		$('.open-popup-link, .second-popup-link').magnificPopup({
			type: 'inline',
			midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
		});

		// Example: 2 Dynamically created

	</script>
	<script>
		jQuery(function($) {
			$(window).scroll(function() {
				if ($(this).scrollTop() > 170) {
					$('#navigation').addClass('fixed');
				} else if ($(this).scrollTop() < 170) {
					$('#navigation').removeClass('fixed');
				}
			});
		});
	</script>
	<script type="text/javascript">
		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 10,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
					nav: false,
				},
				600: {
					items: 3,
					nav: false
				},
				1000: {
					items: 4,
					nav: false,
					loop: true,
					dots: true
				}
			}
		})
	</script>

<script>	
$(document).ready(function () {
var seen = $.cookie('seen_products');
var prod_id = $('[name="product_id"]').val();
        if (seen) {
            seen += ',' + prod_id;
        } else {
            seen = '' + prod_id;
        }
$.cookie('seen_products', seen, { expires: 7, path: '/' });
});
</script>	
	
	
	
   
</body>
</html>
<?php }} ?>