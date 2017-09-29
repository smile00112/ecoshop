<?php /* Smarty version Smarty-3.1.14, created on 2017-09-27 15:30:18
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-data\public\shop\themes\default\home.html" */ ?>
<?php /*%%SmartyHeaderCode:911259cb99dab47873-84874738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b0af9660da0ab8a3c1499eaf285927d45347a6a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-data\\public\\shop\\themes\\default\\home.html',
      1 => 1506500773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '911259cb99dab47873-84874738',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    'wa' => 0,
    'wh' => 0,
    'categories' => 0,
    'cat' => 0,
    'promocards' => 0,
    'promoproducts' => 0,
    'bestsellers' => 0,
    'wa_backend_url' => 0,
    'promo' => 0,
    'p' => 0,
    'badge_html' => 0,
    'wa_theme_url' => 0,
    'frontend_homepage' => 0,
    '_' => 0,
    'onsale' => 0,
    'blog_posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59cb99db04b170_55998061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cb99db04b170_55998061')) {function content_59cb99db04b170_55998061($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-system\\vendors\\smarty3\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_wa_datetime')) include 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-system/vendors/smarty-plugins\\modifier.wa_datetime.php';
?>

<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_sidebar_layout']!='hidden'){?>
<div class="sidebar<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_sidebar_layout']=='left'){?> left-sidebar<?php }?>">

    <!-- CONTACT INFO -->
    <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_sidebar_storeinfo']){?>
        <figure class="store-info">
            <h1 itemprop="name"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('name');?>
</h1>
            <h3>
                <span itemprop="telephone"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('phone');?>
</span>
                <?php if (!isset($_smarty_tpl->tpl_vars['wh'])) $_smarty_tpl->tpl_vars['wh'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['wh']->value = $_smarty_tpl->tpl_vars['wa']->value->shop->settings('workhours')){?><br>
                    <span class="hint"><?php echo $_smarty_tpl->tpl_vars['wh']->value['days_from_to'];?>
<?php if ($_smarty_tpl->tpl_vars['wh']->value['hours_from']&&$_smarty_tpl->tpl_vars['wh']->value['hours_to']){?> <?php echo $_smarty_tpl->tpl_vars['wh']->value['hours_from'];?>
—<?php echo $_smarty_tpl->tpl_vars['wh']->value['hours_to'];?>
<?php }?></span>
                <?php }?>
            </h3>
            <meta itemprop="address" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('country');?>
">
            <meta itemprop="currenciesAccepted" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->currency();?>
">
        </figure>
    <?php }?>

    <!-- ROOT CATEGORIES -->
    <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_sidebar_categories']){?>
        <?php $_smarty_tpl->tpl_vars['categories'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->categories(0,0,true), null, 0);?>
        <?php if (count($_smarty_tpl->tpl_vars['categories']->value)){?>
            <ul class="tree">
                <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</a>
                    </li>
                <?php } ?>
            </ul>
        <?php }?>
    <?php }?>

    <!-- BULLETS -->
    <section class="bullets">
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_1'])){?>
        <figure class="bullet">
            <h4><span class="b-glyph b-shipping"></span> <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_1'];?>
</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_body_1'];?>
</p>
        </figure>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_2'])){?>
        <figure class="bullet">
            <h4><span class="b-glyph b-payment"></span> <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_2'];?>
</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_body_2'];?>
</p>
        </figure>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_3'])){?>
        <figure class="bullet">
            <h4><span class="b-glyph b-location"></span> <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_3'];?>
</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_body_3'];?>
</p>
        </figure>
        <?php }?>
    </section>

    <!-- FOLLOW -->
    <aside class="connect">
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['facebook_likebox_code'])){?>
            <div class="likebox">
                <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['facebook_likebox_code'];?>

            </div>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['twitter_timeline_code'])){?>
            <div class="likebox">
                <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['twitter_timeline_code'];?>

            </div>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['vk_widget_code'])){?>
            <div class="likebox">
                <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['vk_widget_code'];?>

            </div>
        <?php }?>
        
    </aside>

</div>
<?php }?>

<div class="content<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_sidebar_layout']!='hidden'){?> with-sidebar<?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_sidebar_layout']=='left'){?> left-sidebar<?php }?>">

    <?php $_smarty_tpl->tpl_vars['promocards'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->promos(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['bestsellers'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productSet($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_bestsellers']), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bxslider_mode']=='products'){?>
        <?php $_smarty_tpl->tpl_vars['promoproducts'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productSet($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_promo']), null, 0);?>
    <?php }?>

    <?php if (empty($_smarty_tpl->tpl_vars['promocards']->value)&&empty($_smarty_tpl->tpl_vars['promoproducts']->value)&&empty($_smarty_tpl->tpl_vars['bestsellers']->value)){?>

        <article class="welcome">
            <h1>Добро пожаловать в ваш новый интернет-магазин!</h1>
            <p><?php echo sprintf('Начните с <a href="%s">создания товара</a> в бекенде интернет-магазина.',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('shop/?action=products#/welcome/'));?>
</p>
            <style>
                .page-content.with-sidebar { margin-left: 0; border-left: 0; }
            </style>
        </article>

    <?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bxslider_mode']!='hidden'){?>

        <!-- SLIDER -->
        <article class="slider<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bxslider_mode']!='products'){?> fill-entire-area<?php }?>">

            <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bxslider_mode']=='promos'){?>

                

                <?php if ($_smarty_tpl->tpl_vars['promocards']->value){?>
                    <ul class="homepage-bxslider">
                        <?php  $_smarty_tpl->tpl_vars['promo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promocards']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promo']->key => $_smarty_tpl->tpl_vars['promo']->value){
$_smarty_tpl->tpl_vars['promo']->_loop = true;
?>
                            <li style="<?php if (!empty($_smarty_tpl->tpl_vars['promo']->value['background_color'])){?>background-color: <?php echo $_smarty_tpl->tpl_vars['promo']->value['background_color'];?>
;<?php }?> background-image: url('<?php echo $_smarty_tpl->tpl_vars['promo']->value['image'];?>
');">
                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['promo']->value['title'])){?><h3 style="color: <?php echo $_smarty_tpl->tpl_vars['promo']->value['color'];?>
;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h3><?php }?>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['promo']->value['body'])){?><p style="color: <?php echo $_smarty_tpl->tpl_vars['promo']->value['color'];?>
;"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['promo']->value['body'], ENT_QUOTES, 'UTF-8', true));?>
</p><?php }?>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['promo']->value['countdown_datetime'])&&time()<=strtotime($_smarty_tpl->tpl_vars['promo']->value['countdown_datetime'])){?>
                                        <div class="countdown">
                                            <span class="js-promo-countdown"
                                                  data-start="<?php echo date('Y-m-d H:i:s');?>
"
                                                  data-end="<?php echo $_smarty_tpl->tpl_vars['promo']->value['countdown_datetime'];?>
">
                                            </span>
                                        </div>
                                    <?php }?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php }?>

            <?php }else{ ?>

                

                <?php if ($_smarty_tpl->tpl_vars['promoproducts']->value&&count($_smarty_tpl->tpl_vars['promoproducts']->value)){?>
                    <ul class="homepage-bxslider">
                        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promoproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                            <li itemscope itemtype ="http://schema.org/Product">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
<?php if ($_smarty_tpl->tpl_vars['p']->value['summary']){?> &ndash; <?php echo htmlspecialchars(strip_tags($_smarty_tpl->tpl_vars['p']->value['summary']), ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
                                    <h3 itemprop="name">
                                        <span class="name"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</span>
                                    </h3>

                                    <div class="image">
                                            <?php $_smarty_tpl->tpl_vars['badge_html'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->badgeHtml($_smarty_tpl->tpl_vars['p']->value['badge']), null, 0);?>
                                            <?php if ($_smarty_tpl->tpl_vars['badge_html']->value){?>
                                                <div class="corner top right"><?php echo $_smarty_tpl->tpl_vars['badge_html']->value;?>
</div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bxslider_mode']=='products'){?>
                                                <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['p']->value,'0x320',array('itemprop'=>'image','alt'=>$_smarty_tpl->tpl_vars['p']->value['name'],'default'=>((string)$_smarty_tpl->tpl_vars['wa_theme_url']->value)."img/dummy200.png"));?>

                                            <?php }?>
                                    </div>
                                    <div itemprop="offers" class="info" itemscope itemtype="http://schema.org/Offer">
                                        <?php if ($_smarty_tpl->tpl_vars['p']->value['compare_price']>0){?><span class="compare-at-price nowrap"> <?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['compare_price']);?>
 </span><?php }?> <span class="price nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['price']);?>
</span>
                                        <meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['p']->value['price'];?>
">
                                        <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->primaryCurrency();?>
">
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['p']->value['summary']){?><p itemprop="description"><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['p']->value['summary']),255);?>
</p><?php }?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php }else{ ?>
                    <p class="hint align-center"><br><em><?php echo sprintf('Список товаров с идентификатором <strong>%s</strong> либо не существует, либо не содержит товаров. Чтобы отобразить здесь товары, добавьте их в список с таким идентификатором.',(($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_promo'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '()' : $tmp));?>
</em><br><br></p>
                <?php }?>

            <?php }?>
        </article>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['promocards']->value&&$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_promocards_below_the_slider']){?>
        <!-- PROMOS -->
        <section class="promos">
            <ul>
                <?php  $_smarty_tpl->tpl_vars['promo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promocards']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promo']->key => $_smarty_tpl->tpl_vars['promo']->value){
$_smarty_tpl->tpl_vars['promo']->_loop = true;
?><li id="s-promo-<?php echo $_smarty_tpl->tpl_vars['promo']->value['id'];?>
">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['promo']->value['image'];?>
');">
                        <div class="background-color-layer"></div>
                        <?php if (!empty($_smarty_tpl->tpl_vars['promo']->value['title'])){?><h5 style="color: <?php echo $_smarty_tpl->tpl_vars['promo']->value['color'];?>
;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h5><?php }?>
                        
                    </a>
                </li><?php } ?>
            </ul>
        </section>
    <?php }?>

    <!-- plugin hook: 'frontend_homepage' -->
    
    <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_homepage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>

    <!-- BESTSELLERS product list -->
    <?php if ($_smarty_tpl->tpl_vars['bestsellers']->value){?>

        <section class="bestsellers">
            <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bestsellers_title']){?>
                <h5 class="bestsellers-header"><?php echo str_replace('{$date}',smarty_modifier_wa_datetime(time(),"humandate"),$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bestsellers_title']);?>
</h5>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("list-thumbs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['bestsellers']->value), 0);?>

        </section>

    <?php }else{ ?>
        <p class="hint align-center"><br><em><?php echo sprintf('Перетащите несколько товаров в список <strong>%s</strong> в бекенде вашего интернет-магазина (список находится в левой колонке в разделе «Товары»), и эти товары будут автоматически опубликованы здесь на витрине вашего магазина.',(($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_bestsellers'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '()' : $tmp));?>
</em></p>
    <?php }?>

</div>

<div class="clear-both"></div>

<!-- WELCOME note -->
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_welcome_note'])){?>
    <figure class="olives">
        <div class="olives-left">
        <div class="olives-right">
            <div class="olives-content">
                <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_welcome_note'];?>

            </div>
        </div>
        </div>
    </figure>
<?php }?>

<!-- ON SALE product list -->
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_onsale'])){?>

    <?php $_smarty_tpl->tpl_vars['onsale'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productSet($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_onsale']), null, 0);?>

    <?php if (!empty($_smarty_tpl->tpl_vars['onsale']->value)){?>
        <section class="onsale related">
            <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_onsale_title']){?>
                <h4 class="section-header"><?php echo str_replace('{$date}',smarty_modifier_wa_datetime(time(),"humandate"),$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_onsale_title']);?>
</h4>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("list-thumbs-mini.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['onsale']->value,'ulclass'=>"onsale-bxslider"), 0);?>

        </section>
    <?php }?>

<?php }?>

<!-- BLOG posts -->
<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_blogposts']&&$_smarty_tpl->tpl_vars['wa']->value->blog){?>

    <?php $_smarty_tpl->tpl_vars['blog_posts'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->posts(null,4), null, 0);?>
    <?php if (count($_smarty_tpl->tpl_vars['blog_posts']->value)){?>

        <h4 class="section-header">Новые записи в блоге</h4>
        <ul class="thumbs text-content">
        <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blog_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
" class="bold"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a>
                <p class="small"><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['post']->value['text']),128);?>
</p>
                <span class="hint"><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['post']->value['datetime'],"humandate");?>
</span>
            </li>
        <?php } ?>
        </ul>
    <?php }?>
<?php }?>
<?php }} ?>