<?php /* Smarty version Smarty-3.1.14, created on 2017-09-27 15:46:10
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-data\public\blog\themes\default\stream.html" */ ?>
<?php /*%%SmartyHeaderCode:447359cb9d922e0d31-94342815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0398beb40c0d3edc8f11691a2cb61646aebde40b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-data\\public\\blog\\themes\\default\\stream.html',
      1 => 1506500764,
      2 => 'file',
    ),
    'acea284b0238e9b42c3dae8f05bad059942af312' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-data\\public\\blog\\themes\\default\\stream_search.html',
      1 => 1506500764,
      2 => 'file',
    ),
    '2b54d5e84bb447613e1727433f87ed90b82feb64' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-data\\public\\blog\\themes\\default\\stream_posts.html',
      1 => 1506500764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '447359cb9d922e0d31-94342815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_lazyloading' => 0,
    'wa' => 0,
    'stream_title' => 0,
    'page' => 0,
    'is_search' => 0,
    'blog_query' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59cb9d924e8621_33228403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cb9d924e8621_33228403')) {function content_59cb9d924e8621_33228403($_smarty_tpl) {?>

<?php if (!$_smarty_tpl->tpl_vars['is_lazyloading']->value){?>
<div id="post-stream" role="main" class="lazyloading" <?php if ($_smarty_tpl->tpl_vars['wa']->value->param('blog_url')){?>itemscope itemtype="http://schema.org/Blog"<?php }?>> 
<?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['is_lazyloading']->value&&!empty($_smarty_tpl->tpl_vars['stream_title']->value)){?><h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stream_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</h1><?php }?>
    
    <a name="page_<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"></a>

        <?php if ($_smarty_tpl->tpl_vars['is_search']->value){?>
            <?php /*  Call merged included template "stream_search.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("stream_search.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '447359cb9d922e0d31-94342815');
content_59cb9d9235dd52_10942548($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "stream_search.html" */?>
        <?php }else{ ?>
            <?php /*  Call merged included template "stream_posts.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("stream_posts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '447359cb9d922e0d31-94342815');
content_59cb9d923debe2_71463451($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "stream_posts.html" */?>
        <?php }?>



<?php if (!$_smarty_tpl->tpl_vars['is_lazyloading']->value){?>
</div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['page']->value==1&&!$_smarty_tpl->tpl_vars['wa']->value->globals('disable_pageless')){?>
<script type="text/javascript">
$.pageless({
        auto: true, // auto load next pages
        url: '?layout=lazyloading<?php if ($_smarty_tpl->tpl_vars['blog_query']->value){?>&query=<?php echo urlencode($_smarty_tpl->tpl_vars['blog_query']->value);?>
<?php }?>',
        times: 2,
        target: '.lazyloading:first',
        scroll: function(response){
            var progress = '';
            if (response) {
                progress = '<i class="icon16 loading"><'+'/i> <em>Загрузка...<'+'/em>';
            }
        },
        count: <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
,
        paging_selector:'#stream-paging'
        
        <?php if ($_smarty_tpl->tpl_vars['blog_query']->value){?>
            
            ,prepareContent: function(html) {
                // hightlight search query in content text after lazyloading
                var tmp = $('<div></div>').append(html);
                $.blog_utils.highlight(tmp);
                var html = tmp.html();
                tmp.remove();
                return html;
            }
            
        <?php }?>
});
</script>
<?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2017-09-27 15:46:10
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-data\public\blog\themes\default\stream_search.html" */ ?>
<?php if ($_valid && !is_callable('content_59cb9d9235dd52_10942548')) {function content_59cb9d9235dd52_10942548($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-system/vendors/smarty-plugins\\modifier.wa_datetime.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-system\\vendors\\smarty3\\plugins\\modifier.truncate.php';
?>

<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
    <section class="post search-match" id="post-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['wa']->value->param('blog_url')){?>itemprop="blogPosts"<?php }?> itemscope itemtype="http://schema.org/BlogPosting">
        <h3><a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
" itemprop="url"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a></h3>
        <span class="hint">
            <?php if ($_smarty_tpl->tpl_vars['post']->value['user']['posts_link']){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['user']['posts_link'];?>
" class="username"><?php echo $_smarty_tpl->tpl_vars['post']->value['user']['name'];?>
</a>
            <?php }else{ ?>
                <span class="username"><?php echo $_smarty_tpl->tpl_vars['post']->value['user']['name'];?>
</span>
            <?php }?>
            <?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['post']->value['datetime'],"humandate");?>

        </span>
        <p>
            <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['post']->value['text']),400);?>

        </p>
    </section>
<?php }
if (!$_smarty_tpl->tpl_vars['post']->_loop) {
?>
    <?php if (!isset($_smarty_tpl->tpl_vars['page']->value)||$_smarty_tpl->tpl_vars['page']->value<2){?>
        <?php echo _w('%d post','%d posts',0);?>

    <?php }?>
<?php } ?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2017-09-27 15:46:10
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-data\public\blog\themes\default\stream_posts.html" */ ?>
<?php if ($_valid && !is_callable('content_59cb9d923debe2_71463451')) {function content_59cb9d923debe2_71463451($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-system\\vendors\\smarty3\\plugins\\modifier.truncate.php';
?>	<div class="broadkast">
							<div class="wrap container">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<a href="">Главная  </a>
									<i class="fa fa-angle-double-right" aria-hidden="true"></i>
									<span>Новости</span>
									</div>
								</div>
							</div>
						</div>

<div class="news_block">
				<div class="wrap container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<ul class="new_ul">						
						
						
						
<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>


								<li>
									<h3><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h3>
									<p class="text_new"><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['post']->value['text']),124);?>
</p>
									<p class="new_a"><a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
">Читать полностью</a><span>&rarr;</span></p>
									<p class="blue_str"></p>
								</li>


  

<?php } ?>

		</ul>
						</div>
					</div>
				</div>
			</div>
			<div class=" number_s">
				<div class="wrap container">
					<div class="row">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="navigation_f">
							
						
   

							
							
							
							
								<div class="back"><a href="<?php if ($_smarty_tpl->tpl_vars['p']->value!=$_smarty_tpl->tpl_vars['page']->value){?>/blog/?page=<?php echo $_smarty_tpl->tpl_vars['p']->value-1;?>
<?php }?>">Предыдущая</a></div>
								<div class="namber">
								
								
								 <?php $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['p']->step = 1;$_smarty_tpl->tpl_vars['p']->total = (int)ceil(($_smarty_tpl->tpl_vars['p']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['p']->step));
if ($_smarty_tpl->tpl_vars['p']->total > 0){
for ($_smarty_tpl->tpl_vars['p']->value = 1, $_smarty_tpl->tpl_vars['p']->iteration = 1;$_smarty_tpl->tpl_vars['p']->iteration <= $_smarty_tpl->tpl_vars['p']->total;$_smarty_tpl->tpl_vars['p']->value += $_smarty_tpl->tpl_vars['p']->step, $_smarty_tpl->tpl_vars['p']->iteration++){
$_smarty_tpl->tpl_vars['p']->first = $_smarty_tpl->tpl_vars['p']->iteration == 1;$_smarty_tpl->tpl_vars['p']->last = $_smarty_tpl->tpl_vars['p']->iteration == $_smarty_tpl->tpl_vars['p']->total;?>
        <a <?php if ($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->tpl_vars['page']->value){?> class="active"<?php }?> href="<?php if ($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->tpl_vars['page']->value){?>#page_<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php }else{ ?>?page=<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a>
									<?php }} ?>
											

								</div>
								<div class="forw"><a href="<?php if ($_smarty_tpl->tpl_vars['p']->value!=$_smarty_tpl->tpl_vars['page']->value){?>/blog/?page=<?php echo $_smarty_tpl->tpl_vars['p']->value+1;?>
<?php }?>">Следующая</a></div>
						</div>
						</div>
					</div>
				</div>
			</div>
	
	
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