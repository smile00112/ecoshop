<?php /* Smarty version Smarty-3.1.14, created on 2017-09-27 16:43:29
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-data\public\shop\themes\default\product.html" */ ?>
<?php /*%%SmartyHeaderCode:2269659cbab0183ad23-86172396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c52bead43547c78f3c1de76a14c2cfe340bba2f6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-data\\public\\shop\\themes\\default\\product.html',
      1 => 1506500773,
      2 => 'file',
    ),
    '5f9e19da991252101a163672bef4b54e37c634a2' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-data\\public\\shop\\themes\\default\\review.html',
      1 => 1506500773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2269659cbab0183ad23-86172396',
  'function' => 
  array (
    'review_reviews' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
    'wa_theme_url' => 0,
    'product' => 0,
    'image' => 0,
    'wa' => 0,
    'reviews' => 0,
    'review' => 0,
    'depth' => 0,
    'loop' => 0,
    'reply_allowed' => 0,
    'reviews_count' => 0,
    'current_user_id' => 0,
    'require_authorization' => 0,
    'auth_adapters' => 0,
    'current_auth_source' => 0,
    'adapter' => 0,
    'adapter_id' => 0,
    'current_auth' => 0,
    'rates' => 0,
    'reviews_total_count' => 0,
    '_total_count' => 0,
    '_count' => 0,
    'i' => 0,
    'products' => 0,
    'p' => 0,
    'seen_ids' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59cbab01df3c07_43055237',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cbab01df3c07_43055237')) {function content_59cbab01df3c07_43055237($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/rate.widget.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
reviews.js"></script>
<div class="broadkast">
				<div class="wrap container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-10 col-lg-11">
							<a href="">Главная  </a> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
							<a href="">Каталог товаров  </a> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
							<a href="">Средства по уходу за авто   </a> <i class="fa fa-angle-double-right" aria-hidden="true"></i>
							<span><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</span>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-2 col-lg-1">
							<p class="art">Артикул:<span> <?php echo $_smarty_tpl->tpl_vars['product']->value["skus"][1]["sku"];?>
</span></p>
							
							
					


						</div>
					</div>
				</div>
</div>
			

	
	
	<div class="">
				<div class="wrap container">
					<div class="row">
						<div class="col-xs-12 col-sm-5 col-md-6 col-lg-6">


							<div class="flexslider">
								<ul class="slides">
								
								
						<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
                           
							
						<li data-thumb="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->imgUrl($_smarty_tpl->tpl_vars['image']->value);?>
">
										<img src="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->imgUrl($_smarty_tpl->tpl_vars['image']->value);?>
" />
						</li>	
							
							
                        <?php } ?>
								
								
								<!--
									<li data-thumb="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/kartochka-img.jpg">
										<img src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/kartochka-img.jpg" />
									</li>
									<li data-thumb="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/kartochka-img.jpg">
										<img src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/kartochka-img.jpg" />
									</li>
									<li data-thumb="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/kartochka-img.jpg">
										<img src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/kartochka-img.jpg" />
									</li>-->

								</ul>
							</div>

						</div>
						<div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
								<!--999999<?php echo var_dump($_smarty_tpl->tpl_vars['product']->value);?>
-->
								
							<p class="r_b_p"><?php echo $_smarty_tpl->tpl_vars['product']->value['params']['proizv'];?>
</p>
							<h1 class="h1"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h1>
							<p class="r_b_p"><?php echo $_smarty_tpl->tpl_vars['product']->value['params']['proizv1'];?>
</p>
							<div class="price_karto">
								<p>
									<span class="price_b"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['price']);?>
</span>
									<span class="r_b_p_s"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['compare_price']);?>
 </span>
								</p>
								<p class="lbp">
									Доставка от 1 часа до 5 дней
								</p>
							</div>
							<p class="two_but">
								<button class="button">Добавить в корзину</button>
								<button class="button_border button">Купить в один клик</button>
							</p>
							<p class="text_kart">
							<?php echo $_smarty_tpl->tpl_vars['product']->value['summary'];?>

								
							</p>
							<div class="inf0block">
								<p class="inf_img_1">Доставка курьером (Спб) 1-2 рабочих дня, самовывоз</p>
								<p class="inf_img_2">

									Банковской картой на сайте или при получении в руки товара</p>
							</div>

						</div>
					</div>
				</div>
				<div class="pr_im">
					<div class="wrap container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<ul class="pr_img_s">
									<li class="pr_img_1">
										<p>Nordic Ecolabel</p>
										<p>Экологический стандарт</p>
									</li>
									<li class="pr_img_2">
										<p>Товар года в Швеции</p>
										<p>Smart Microfiber System</p>
									</li>
									<li class="pr_img_3">
										<p>Хочу скидку</p>
										<p>Получить скидку сейчас</p>
									</li>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
	
	
	
<?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>



<!---->


    <!-- reviews begin -->
    <?php if (!function_exists('smarty_template_function_review_reviews')) {
    function smarty_template_function_review_reviews($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['review_reviews']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
        <?php $_smarty_tpl->tpl_vars['depth'] = new Smarty_variable(-1, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value){
$_smarty_tpl->tpl_vars['review']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['review']->value['depth']<$_smarty_tpl->tpl_vars['depth']->value){?>
          
            <?php $_smarty_tpl->tpl_vars['loop'] = new Smarty_variable(($_smarty_tpl->tpl_vars['depth']->value-$_smarty_tpl->tpl_vars['review']->value['depth']), null, 0);?>
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['name'] = "end-review";
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['loop']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['total']);
?>
                <ul class="reviews-branch"></ul>
                </li>
              </ul>
            <?php endfor; endif; ?>
            
            <?php $_smarty_tpl->tpl_vars['depth'] = new Smarty_variable($_smarty_tpl->tpl_vars['review']->value['depth'], null, 0);?>
          <?php }?>
          
          <?php if ($_smarty_tpl->tpl_vars['review']->value['depth']==$_smarty_tpl->tpl_vars['depth']->value){?>
            </li>
            <li data-id="<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
" data-parent-id="<?php echo $_smarty_tpl->tpl_vars['review']->value['parent_id'];?>
">
          <?php }?>
          
          <?php if ($_smarty_tpl->tpl_vars['review']->value['depth']>$_smarty_tpl->tpl_vars['depth']->value){?>
            <ul class="reviews-branch">
              <li data-id=<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
 data-parent-id="<?php echo $_smarty_tpl->tpl_vars['review']->value['parent_id'];?>
">
              <?php $_smarty_tpl->tpl_vars['depth'] = new Smarty_variable($_smarty_tpl->tpl_vars['review']->value['depth'], null, 0);?>
          <?php }?>
            <?php /*  Call merged included template "review.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("review.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('reply_allowed'=>$_smarty_tpl->tpl_vars['reply_allowed']->value,'single_view'=>true,'review'=>$_smarty_tpl->tpl_vars['review']->value), 0, '2269659cbab0183ad23-86172396');
content_59cbab01986df4_23299923($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "review.html" */?>
            <!-- sub review placeholder -->
        <?php } ?>
        
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['name'] = "end-review";
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['depth']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["end-review"]['total']);
?>
              <ul class="reviews-branch"></ul>
              </li>
            </ul>
        <?php endfor; endif; ?>
    <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

    
    <section class="reviews product-info">
    
        <a name="reviewheader"></a>
        <h3 class="reviews-count-text" <?php if ($_smarty_tpl->tpl_vars['reviews_count']->value==0){?>style="display: none;"<?php }?>>
            <?php echo htmlspecialchars((_w('%d review for ','%d reviews for ',$_smarty_tpl->tpl_vars['reviews_count']->value)).($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8', true);?>

        </h3>
       
        <!-- add review form -->
        <h4 class="write-review">
            <a href="#" class="inline-link"><b><i>Написать отзыв</i></b></a>
        </h4>
        
		 <!-- existing reviews list -->
        <ul class="reviews-branch">
        <?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value){
$_smarty_tpl->tpl_vars['review']->_loop = true;
?>
            <li data-id=<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
 data-parent-id="0">
                <?php /*  Call merged included template "review.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("review.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('reply_allowed'=>$_smarty_tpl->tpl_vars['reply_allowed']->value), 0, '2269659cbab0183ad23-86172396');
content_59cbab01986df4_23299923($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "review.html" */?>
                <?php if (!empty($_smarty_tpl->tpl_vars['review']->value['comments'])){?>
                    <?php smarty_template_function_review_reviews($_smarty_tpl,array('reviews'=>$_smarty_tpl->tpl_vars['review']->value['comments']));?>

                <?php }else{ ?>
                    <ul class="reviews-branch"></ul>
                <?php }?>
            </li>
        <?php } ?>
        </ul>
		
		
        <div class="review-form" id="product-review-form" <?php if ($_smarty_tpl->tpl_vars['reviews_count']->value>0){?>style="display:none;"<?php }?>>
            
            <?php $_smarty_tpl->tpl_vars['current_user_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->userId(), null, 0);?>
            
            <form method="post">
                <div class="review-form-fields">
                
                    <?php if (empty($_smarty_tpl->tpl_vars['current_user_id']->value)&&$_smarty_tpl->tpl_vars['require_authorization']->value){?>
                        <p class="review-field"><?php echo sprintf('Чтобы добавить отзыв, пожалуйста, <a href="%s">зарегистрируйтесь</a> или <a href="%s">войдите</a>',$_smarty_tpl->tpl_vars['wa']->value->signupUrl(),$_smarty_tpl->tpl_vars['wa']->value->loginUrl());?>
</p>
                    <?php }else{ ?>
                    
                        <p class="review-field">
                        <label for="review-text">Отзыв</label>
                        <textarea id="review-text" name="text" rows="10" cols="45"></textarea>
                        </p>
                        <p class="review-field">
                        <label class="review-rate-label">Оцените товар</label>
                        <a href="#" class="no-underline rate" data-rate="0" id="review-rate">
                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?><i class="icon16 star-empty"></i><?php }} ?>
                        </a>
                        <a href="javascript:void(0);" class="inline-link rate-clear" id="clear-review-rate" style="display: none;">
                            <b><i>очистить</i></b>
                        </a>
                        <input name="rate" type="hidden" value="0">
                        </p>
                
                        <?php if (!empty($_smarty_tpl->tpl_vars['current_user_id']->value)){?>
                            <p class="review-field"><label>Ваше имя</label>
                                <strong><img src="<?php echo $_smarty_tpl->tpl_vars['wa']->value->user()->getPhoto(20);?>
" class="userpic" alt=""><?php echo $_smarty_tpl->tpl_vars['wa']->value->user('name');?>
</strong>
                                <a href="?logout">выйти</a>
                            </p>
                        <?php }else{ ?>
                            <?php if ($_smarty_tpl->tpl_vars['auth_adapters']->value){?>
                                <ul id="user-auth-provider" class="menu-h auth-type">
                                    <li data-provider="guest"  <?php if ($_smarty_tpl->tpl_vars['current_auth_source']->value==shopProductReviewsModel::AUTH_GUEST){?>class="selected"<?php }?>><a href="#">Гость</a></li>
                                    <?php  $_smarty_tpl->tpl_vars['adapter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adapter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['auth_adapters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['adapter']->key => $_smarty_tpl->tpl_vars['adapter']->value){
$_smarty_tpl->tpl_vars['adapter']->_loop = true;
?>
                                        <?php $_smarty_tpl->tpl_vars['adapter_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['adapter']->value->getId(), null, 0);?>
                                        <li data-provider="<?php echo $_smarty_tpl->tpl_vars['adapter_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['current_auth_source']->value==$_smarty_tpl->tpl_vars['adapter_id']->value){?>class="selected"<?php }?>>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['adapter']->value->getCallbackUrl(0);?>
&app=shop<?php if (!$_smarty_tpl->tpl_vars['require_authorization']->value){?>&guest=1<?php }?>">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['adapter']->value->getIcon();?>
" alt=""><?php echo $_smarty_tpl->tpl_vars['adapter']->value->getName();?>
</a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php }?>
                            
                            <div class="provider-fields" data-provider="<?php echo shopProductReviewsModel::AUTH_GUEST;?>
" >
                                <p class="review-field">
                                    <label>Ваше имя</label>
                                    <input type="text" name="name" id="review-name" value="">
                                </p>
                                <p class="review-field">
                                    <label>Email</label>
                                    <input type="text" name="email" id="review-email">
                                </p>
                                
                                   
                                   
                                
                            </div>
                            
                            <?php if (!empty($_smarty_tpl->tpl_vars['auth_adapters']->value[$_smarty_tpl->tpl_vars['current_auth_source']->value])){?>
                                <?php $_smarty_tpl->tpl_vars['adapter'] = new Smarty_variable($_smarty_tpl->tpl_vars['auth_adapters']->value[$_smarty_tpl->tpl_vars['current_auth_source']->value], null, 0);?>
                                <div class="provider-fields" data-provider="<?php echo $_smarty_tpl->tpl_vars['adapter']->value->getId();?>
">
                                    <p class="review-field"><label>Ваше имя</label>
                                        <strong><img src="<?php echo $_smarty_tpl->tpl_vars['adapter']->value->getIcon();?>
" class="userpic" /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_auth']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
                                        <a href="?logout">выйти</a>
                                    </p>
                                </div>
                            <?php }?>
                        <?php }?>
                        
                    <br>
                    <p class="review-field">
                        <label for="review-title">Заголовок</label>
                        <input type="text" name="title" id="review-title" class="bold">
                    </p>
                    
                   
                
                    <div class="review-submit">
                        
                        <?php if (empty($_smarty_tpl->tpl_vars['current_user_id']->value)){?>
                            <?php echo $_smarty_tpl->tpl_vars['wa']->value->captcha();?>

                        <?php }?>
                        <input type="submit" class="save" value="Добавить отзыв">
                        <span class="review-add-form-status ajax-status" style="display: none;">
                            <i class="ajax-statuloading icon16 loading"><!--icon --></i>
                        </span>
                        
                        <em class="hint">Ctrl+Enter</em>
                        <input type="hidden" name="parent_id" value="0">
                        <input type="hidden" name="product_id" value="<?php if (isset($_smarty_tpl->tpl_vars['product']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
<?php }else{ ?>0<?php }?>">
                        <input type="hidden" name="auth_provider" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['current_auth_source']->value)===null||$tmp==='' ? shopProductReviewsModel::AUTH_GUEST : $tmp);?>
">
                        <input type="hidden" name="count" value="<?php echo $_smarty_tpl->tpl_vars['reviews_count']->value;?>
">
                    </div>
                <?php }?>
                
                </div>
            </form>
        </div>
        
   <section class="reviews">
            <!--<h2><?php echo sprintf('%s отзывы',htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</h2>-->
            
           
                     
            <p class="review-field">
            <a href="#" class="no-underline rate" id="add-rev-rate" data-rate="0">
                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?><i class="icon16 star-empty"></i><?php }} ?>
            </a>
            <a href="javascript:void(0);" class="inline-link rate-clear" id="clear-add-rev-rate" style="display: none;">
                            <b><i>очистить</i></b>
            </a>
            </p>           
            <a class="reviews-add to-reviews" href="#tab-reviews">Добавить отзыв</a>
            <?php if (!empty($_smarty_tpl->tpl_vars['rates']->value)){?>
                <p class="rating">
                   <!-- Средняя оценка покупателей:-->
                   <div class="bayers-rank">Оценка покупателей</div>
                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->ratingHtml($_smarty_tpl->tpl_vars['product']->value['rating'],16);?>
 
                    <div class="reviews-total-count"><?php echo $_smarty_tpl->tpl_vars['reviews_total_count']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['reviews_total_count']->value==1){?>оценка
                <?php }elseif($_smarty_tpl->tpl_vars['reviews_total_count']->value>1&&$_smarty_tpl->tpl_vars['reviews_total_count']->value<5){?>оценки<?php }else{ ?>оценок<?php }?></div>
                    <!--<?php if ($_smarty_tpl->tpl_vars['product']->value['rating']>0){?><span class="hint"><?php echo sprintf('%s из 5 звезд',$_smarty_tpl->tpl_vars['product']->value['rating']);?>
</span><?php }?>-->
                </p>
                
                <div class="review-with-rank">Отзывы с оценкой</div>
                <table class="rating-distribution">
                    <?php $_smarty_tpl->tpl_vars['_total_count'] = new Smarty_variable(0, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['_count'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_count']->_loop = false;
 $_smarty_tpl->tpl_vars['_rate'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_count']->key => $_smarty_tpl->tpl_vars['_count']->value){
$_smarty_tpl->tpl_vars['_count']->_loop = true;
 $_smarty_tpl->tpl_vars['_rate']->value = $_smarty_tpl->tpl_vars['_count']->key;
?>
                        <?php $_smarty_tpl->tpl_vars['_total_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['_total_count']->value+$_smarty_tpl->tpl_vars['_count']->value, null, 0);?>
                    <?php } ?>
                    
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = -1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 0+1 - (5) : 5-(0)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 5, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (empty($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value])||!$_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]){?><?php $_smarty_tpl->tpl_vars['_count'] = new Smarty_variable(0, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value], null, 0);?><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['i']->value||$_smarty_tpl->tpl_vars['_count']->value){?>
                            <tr>
                                
                                <!--<td>
                                    <div class="bar">
                                        <div class="filling" style="width: <?php if ($_smarty_tpl->tpl_vars['_total_count']->value>0){?><?php echo str_replace(',','.',100*$_smarty_tpl->tpl_vars['_count']->value/$_smarty_tpl->tpl_vars['_total_count']->value);?>
<?php }else{ ?>0<?php }?>%;<?php if (!$_smarty_tpl->tpl_vars['i']->value){?> background: #ddd;<?php }?>"></div>
                                    </div>
                                </td>-->
                                <td>
                                    <span class="rating"><?php $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int)ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? $_smarty_tpl->tpl_vars['i']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['i']->value)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0){
for ($_smarty_tpl->tpl_vars['j']->value = 1, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++){
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration == 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration == $_smarty_tpl->tpl_vars['j']->total;?><i class="icon10 star"></i><?php }} else { ?><span class="hint">без оценки</span><?php }  ?><?php if ($_smarty_tpl->tpl_vars['i']->value<5){?><?php $_smarty_tpl->tpl_vars['z'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['z']->step = 1;$_smarty_tpl->tpl_vars['z']->total = (int)ceil(($_smarty_tpl->tpl_vars['z']->step > 0 ? 5-$_smarty_tpl->tpl_vars['i']->value+1 - (1) : 1-(5-$_smarty_tpl->tpl_vars['i']->value)+1)/abs($_smarty_tpl->tpl_vars['z']->step));
if ($_smarty_tpl->tpl_vars['z']->total > 0){
for ($_smarty_tpl->tpl_vars['z']->value = 1, $_smarty_tpl->tpl_vars['z']->iteration = 1;$_smarty_tpl->tpl_vars['z']->iteration <= $_smarty_tpl->tpl_vars['z']->total;$_smarty_tpl->tpl_vars['z']->value += $_smarty_tpl->tpl_vars['z']->step, $_smarty_tpl->tpl_vars['z']->iteration++){
$_smarty_tpl->tpl_vars['z']->first = $_smarty_tpl->tpl_vars['z']->iteration == 1;$_smarty_tpl->tpl_vars['z']->last = $_smarty_tpl->tpl_vars['z']->iteration == $_smarty_tpl->tpl_vars['z']->total;?><i class="icon10 star-empty">
                                    </i><?php }} ?><?php }?></span>
                                </td>
                                <td class="min-width hint"><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value,'reviews');?>
"><?php echo $_smarty_tpl->tpl_vars['_count']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['_count']->value==1){?>оценка<?php }elseif($_smarty_tpl->tpl_vars['_count']->value>1&&$_smarty_tpl->tpl_vars['_count']->value<5){?>оценки<?php }else{ ?>оценок<?php }?></a></td>
                            </tr>
                        <?php }?>
                    <?php }} ?>
                </table>
            <?php }?>

            
                
            
            </ul>
        </section>     



<!---->
			<div class="reiting">
				<div class="wrap container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
							<h1 class="h1">Отзывы клиентов</h1>
							<div class="otz">
								<div class="p_otz">
									<p class="name_otz">Ладог Леонид</p>
									<p class="starrr">

										<span class="fa-star fa"></span>
										<span class="fa-star fa"></span>
										<span class="fa-star fa"></span>
										<span class="fa-star fa"></span>
										<span class="fa-star fa grey_star"></span>
									</p>
								</div>
								<p class="text_otz">Достойная тряпка. Порадовала вариативность использования тряпки. Пригодится и зимой, и в межсезонье. Летом попробую счищать им насекомых со стекла). Покупала во время действия акции. Получила актуальный подарок.</p>
							</div>
							<div class="otz">
								<div class="p_otz">
									<p class="name_otz">Ладог Леонид</p>
									<p class="starrr">

										<span class="fa-star fa"></span>
										<span class="fa-star fa"></span>
										<span class="fa-star fa grey_star"></span>
										<span class="fa-star fa grey_star"></span>
										<span class="fa-star fa grey_star"></span>
									</p>
								</div>
								<p class="text_otz">Достойная тряпка. Порадовала вариативность использования тряпки. Пригодится и зимой, и в межсезонье. Летом попробую счищать им насекомых со стекла). Покупала во время действия акции. Получила актуальный подарок.</p>
							</div>
							<div class="otz">
								<div class="p_otz">
									<p class="name_otz">Ладог Леонид</p>
									<p class="starrr">

										<span class="fa-star fa"></span>
										<span class="fa-star fa"></span>
										<span class="fa-star fa"></span>
										<span class="fa-star fa"></span>
										<span class="fa-star fa grey_star"></span>
									</p>
								</div>
								<p class="text_otz">Достойная тряпка. Порадовала вариативность использования тряпки. Пригодится и зимой, и в межсезонье. Летом попробую счищать им насекомых со стекла). Покупала во время действия акции. Получила актуальный подарок.</p>
							</div>
							<div><button class="button_border button m0">Показать все отзывы</button></div>

						</div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-lg-offset-0">
							<div class="o_otz">
								<a href="#test-popup3" class="open-popup-link3 button">Оставить отзыв</a>

							</div>
							<div class="block_ot">
								<p class="name_reit_r">Отзывы с оценкой</p>
								<p>
									<p class="starrr">

										<span class="fa-star fa"></span>
										<span class="fa-star fa"></span>
										<span class="fa-star fa"></span>
										<span class="fa-star fa"></span>
										<span class="fa-star fa grey_star"></span>
										<span class="text_ed">11</span>
										<span class="text_ed"> отзывов</span>
									</p>
									<p class="starrr">

										<span class="fa-star fa"></span>
										<span class="fa-star fa"></span>
										<span class="fa-star fa grey_star"></span>
										<span class="fa-star fa grey_star" ></span>
										<span class="fa-star fa grey_star"></span>
										<span class="text_ed">11</span>
										<span class="text_ed"> отзывов</span>
									</p>
									<p class="starrr">

										<span class="fa-star fa"></span>
										<span class="fa-star fa"></span>
										<span class="fa-star fa"></span>
										<span class="fa-star fa"></span>
										<span class="fa-star fa grey_star"></span>
										<span class="text_ed">11</span>
										<span class="text_ed"> отзывов</span>
									</p>
									<p class="starrr">

										<span class="fa-star fa"></span>
										<span class="fa-star fa"></span>
										<span class="fa-star fa"></span>
										<span class="fa-star fa"></span>
										<span class="fa-star fa"></span>
										<span class="text_ed">11</span>
										<span class="text_ed"> отзывов</span>
									</p>
								</p>
							</div>
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
		
		
			<div class="karusel">
		<div class="wrap container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

					<h2 class="h2">Распродажа</h2>
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
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2017-09-27 16:43:29
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-data\public\shop\themes\default\review.html" */ ?>
<?php if ($_valid && !is_callable('content_59cbab01986df4_23299923')) {function content_59cbab01986df4_23299923($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-system\\vendors\\smarty3\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_wa_datetime')) include 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-system/vendors/smarty-plugins\\modifier.wa_datetime.php';
?>

<?php if (!empty($_smarty_tpl->tpl_vars['ajax_append']->value)){?><li data-id=<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
 data-parent-id="<?php echo $_smarty_tpl->tpl_vars['review']->value['parent_id'];?>
"><?php }?>

<figure class="review" itemprop="review" itemscope itemtype="http://schema.org/Review">
    <div class="summary">
        <h6>
            <?php if (!$_smarty_tpl->tpl_vars['review']->value['parent_id']&&!empty($_smarty_tpl->tpl_vars['review']->value['rate'])){?>
            <span itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                <?php $_smarty_tpl->tpl_vars['rate'] = new Smarty_variable(round($_smarty_tpl->tpl_vars['review']->value['rate']), null, 0);?>
                <meta itemprop="worstRating" content = "1">
                <meta itemprop="ratingValue" content="<?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
">
                <meta itemprop="bestRating" content = "5">
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->ratingHtml($_smarty_tpl->tpl_vars['rate']->value);?>

            </span>
            <?php }?>
            <span itemprop="name"><?php if ($_smarty_tpl->tpl_vars['review']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['review']->value['title'];?>
<?php }?></span>
        </h6>
         
        <?php if (empty($_smarty_tpl->tpl_vars['review']->value['site'])){?>
            <span class="username" itemprop="author"><?php echo $_smarty_tpl->tpl_vars['review']->value['author']['name'];?>
</span>
        <?php }else{ ?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['review']->value['site'];?>
" class="username" itemprop="author"><?php echo $_smarty_tpl->tpl_vars['review']->value['author']['name'];?>
</a>
        <?php }?>
        
        <?php if (ifempty($_smarty_tpl->tpl_vars['review']->value['author']['is_user'])>0){?>
            <span class="staff"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('name');?>
</span>
        <?php }?>
        
        <meta itemprop="itemReviewed" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
        <meta itemprop="datePublished" content="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['review']->value['datetime'],'Y-m-d');?>
">
        <span class="date" title="<?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['review']->value['datetime']);?>
"><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['review']->value['datetime'],"humandatetime");?>
</span>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['review']->value['text']){?>
        <p itemprop="description"><?php echo $_smarty_tpl->tpl_vars['review']->value['text'];?>
</p>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['reply_allowed']->value){?>
        <div class="actions">
            <a href="<?php if (isset($_smarty_tpl->tpl_vars['reply_link']->value)){?><?php echo $_smarty_tpl->tpl_vars['reply_link']->value;?>
<?php }else{ ?>#<?php }?>" class="review-reply inline-link"><b><i>ответить</i></b></a>
        </div>
    <?php }?>
</figure>

<?php if (!empty($_smarty_tpl->tpl_vars['ajax_append']->value)){?><ul class="reviews-branch"></ul></li><?php }?><?php }} ?>