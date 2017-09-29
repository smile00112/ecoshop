<?php /* Smarty version Smarty-3.1.14, created on 2017-09-27 15:41:43
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-data\public\blog\themes\default\post.html" */ ?>
<?php /*%%SmartyHeaderCode:2754459cb9c871ab279-93749740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b84d3c9db43d12efc2d107563209c4e6070a27c6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-data\\public\\blog\\themes\\default\\post.html',
      1 => 1506500764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2754459cb9c871ab279-93749740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
    'wa' => 0,
    'p' => 0,
    'products_disc' => 0,
    'products' => 0,
    'wa_theme_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59cb9c8729d5a7_61217546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cb9c8729d5a7_61217546')) {function content_59cb9c8729d5a7_61217546($_smarty_tpl) {?>			<div class="broadkast">
				<div class="wrap container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<a href="">Главная  </a>
							<i class="fa fa-angle-double-right" aria-hidden="true"></i>
							<span><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</span>
						</div>
					</div>
				</div>
			</div>

<div class="wrap container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<div class="info_new">
								<h1 class="h1"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h1>
								<?php echo $_smarty_tpl->tpl_vars['post']->value['text'];?>


							</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<ul class="new_ul n_e">
							<li>
								<h3>Популярные новости</h3>
								
								
						<?php $_smarty_tpl->tpl_vars['post'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->posts(1,5), null, 0);?>
                                
                                
                                <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>

	                    
	                    	<p class="r_b_new"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['title'];?>
</a></p>
	                    
	                    	
	                    	
						
					
                    <?php } ?>
								
								
								
								
								
							

							</li>
						</ul>
						<ul class="new_card kat_li kat">
							<li>
							
							<?php $_smarty_tpl->tpl_vars['products_disc'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productSet("tovdna"), null, 0);?>
						
							<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products_disc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
								<p><a href="/<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
/"><img src="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgUrl($_smarty_tpl->tpl_vars['p']->value,'200');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['p']->value['summary'];?>
"></p>
								<p class="kat_name_tov"><a href="/<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
/"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</a></p>
								<p class="text_grey_kat">SPA Care</p>
								<p class="price"><?php echo $_smarty_tpl->tpl_vars['p']->value['price'];?>
 руб.</p>
								<p class="action_li">Товар дня</p>
								
							<?php } ?>	
							</li>
						</ul>
						
		
						
						
						
						
						
						
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
									<p class="price"><?php echo $_smarty_tpl->tpl_vars['p']->value['price'];?>
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
			<?php }} ?>