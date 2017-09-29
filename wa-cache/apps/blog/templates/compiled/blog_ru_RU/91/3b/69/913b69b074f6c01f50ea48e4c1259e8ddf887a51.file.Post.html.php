<?php /* Smarty version Smarty-3.1.14, created on 2017-09-28 18:00:00
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-apps\blog\templates\actions\post\Post.html" */ ?>
<?php /*%%SmartyHeaderCode:376859cd0e703c4491-73716995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '913b69b074f6c01f50ea48e4c1259e8ddf887a51' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-apps\\blog\\templates\\actions\\post\\Post.html',
      1 => 1506500510,
      2 => 'file',
    ),
    'b546878fa7e4bc740f7453b9f91f8aee9fd4344c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-apps\\blog\\templates\\dialogs\\postDelete.html',
      1 => 1506500511,
      2 => 'file',
    ),
    '087ee33fd0ad9264a69044dd9b33c7a91bf9f97f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-apps\\blog\\templates\\actions\\comments\\include.comment.html',
      1 => 1506500510,
      2 => 'file',
    ),
    '500d92d5ca7553806a80f80dfae56539802133e6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-apps\\blog\\templates\\actions\\post\\include.comments.html',
      1 => 1506500510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '376859cd0e703c4491-73716995',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blog' => 0,
    'l' => 0,
    'post' => 0,
    'current_contact' => 0,
    'contact_rights' => 0,
    'wa_backend_url' => 0,
    'plugin' => 0,
    'output' => 0,
    'link' => 0,
    'p' => 0,
    'backend_post' => 0,
    'wa' => 0,
    'dialogs' => 0,
    'dialog' => 0,
    'wa_url' => 0,
    'wa_app_static_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59cd0e70a54110_30216452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cd0e70a54110_30216452')) {function content_59cd0e70a54110_30216452($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-system\\vendors\\smarty3\\plugins\\modifier.escape.php';
if (!is_callable('smarty_modifier_wa_datetime')) include 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-system/vendors/smarty-plugins\\modifier.wa_datetime.php';
if (!is_callable('smarty_block_wa_js')) include 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-system/vendors/smarty-plugins\\block.wa_js.php';
?>
  <div class="b-stream b-first-post">
    <div class="b-stream-title">

      <div class="float-right ie-menu-h-fix">
        <ul class="menu-h" id="blog-stream-primary-menu">
          <li class="b-search-form">
            <input type="search" name="text" class="search" placeholder="Найти запись" value="">
          </li>
        </ul>
      </div>

      <h1>
      <?php if (isset($_smarty_tpl->tpl_vars['blog']->value)&&$_smarty_tpl->tpl_vars['blog']->value){?>
        <?php if ($_smarty_tpl->tpl_vars['blog']->value['status']==blogBlogModel::STATUS_PUBLIC){?>
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

          <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blog']->value['link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
            <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['l']->value, 'uri');?>
" target="_blank" title="Открыть на сайте: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value, ENT_QUOTES, 'UTF-8', true);?>
"><i class="icon16 new-window"></i></a>
          <?php } ?>
        <?php }else{ ?>
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

          <i class="icon16 lock-bw" title="Закрытый блог"></i>
        <?php }?>
      <?php }else{ ?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

      <?php }?>
      </h1>
    </div>

    <div class="block triple-padded b-post b-white b-one-post-on-page <?php echo $_smarty_tpl->tpl_vars['blog']->value['color'];?>
" id="b-post-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
      <?php $_smarty_tpl->tpl_vars['post_edit'] = new Smarty_variable(false, null, 0);?>
      <?php if (($_smarty_tpl->tpl_vars['post']->value['rights']>=blogRightConfig::RIGHT_FULL)||(($_smarty_tpl->tpl_vars['post']->value['contact_id']==$_smarty_tpl->tpl_vars['current_contact']->value['id'])&&($_smarty_tpl->tpl_vars['post']->value['rights']>=blogRightConfig::RIGHT_READ_WRITE))){?>
        <?php $_smarty_tpl->tpl_vars['post_edit'] = new Smarty_variable(true, null, 0);?>
        <div class="float-right block half-padded">
          <ul class="menu-h">
            <li>
              <a href="?module=post&amp;action=edit&amp;id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><i class="icon16 edit"></i>Редактировать запись</a>
            </li>
            <li>
              <a href="#" class="dialog-confirm" id="postdelete-dialog-confirm" title="<?php echo sprintf('Запись «%s» будет удалена навсегда. Удалить?',htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true));?>
"><i class="icon16 delete"></i>Удалить</a>
            </li>
          </ul>
        </div>
        <?php $_smarty_tpl->_capture_stack[0][] = array('default', null, "dialogs"); ob_start(); ?>
          <?php /*  Call merged included template "./../../dialogs/postDelete.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./../../dialogs/postDelete.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '376859cd0e703c4491-73716995');
content_59cd0e704a2f44_16611358($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./../../dialogs/postDelete.html" */?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
      <?php }?>

      <div class="profile image50px">
        <div class="image">
          <?php if ($_smarty_tpl->tpl_vars['contact_rights']->value&&$_smarty_tpl->tpl_vars['post']->value['contact_id']){?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
contacts/#/contact/<?php echo $_smarty_tpl->tpl_vars['post']->value['contact_id'];?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['user']['photo_url_50'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['user']['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="userpic">
          </a>
          <?php }else{ ?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['user']['photo_url_50'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['user']['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="userpic">
          <?php }?>
        </div>
        <div class="details">
          <h1>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>



            <?php if (isset($_smarty_tpl->tpl_vars['post']->value['plugins'])&&isset($_smarty_tpl->tpl_vars['post']->value['plugins']['post_title'])&&$_smarty_tpl->tpl_vars['post']->value['plugins']['post_title']){?>

              
              <!-- plugin hook: "prepare_posts_backend.*.post_title" -->
              <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['post']->value['plugins']['post_title']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>

                <!-- begin "prepare_posts_backend.<?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
.post_title" -->
                <?php echo $_smarty_tpl->tpl_vars['output']->value;?>

                <!-- end "prepare_posts_backend.<?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
.post_title" -->
              <?php } ?>
              <!-- end plugin hook: "prepare_posts_backend.*.post_title" -->
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['post']->value['plugins'])&&isset($_smarty_tpl->tpl_vars['post']->value['plugins']['post_title_right'])&&$_smarty_tpl->tpl_vars['post']->value['plugins']['post_title_right']){?>

              
              <!-- plugin hook: "prepare_posts_backend.*.post_title_right" -->
              <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['post']->value['plugins']['post_title_right']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>

                <!-- begin "prepare_posts_backend.<?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
.post_title_right" -->
                <?php echo $_smarty_tpl->tpl_vars['output']->value;?>

                <!-- end "prepare_posts_backend.<?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
.post_title_right" -->
              <?php } ?>
              <!-- end plugin hook: "prepare_posts_backend.*.post_title_right" -->
            <?php }?>
          </h1>

          <div class="b-post-credentials">
            <?php if ($_smarty_tpl->tpl_vars['contact_rights']->value&&$_smarty_tpl->tpl_vars['post']->value['contact_id']){?>
              <a class="b-gray-link" href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
contacts/#/contact/<?php echo $_smarty_tpl->tpl_vars['post']->value['contact_id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['user']['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
            <?php }else{ ?>
              <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['user']['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
            <?php }?>

            <span><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['post']->value['datetime'],"humandatetime");?>
</span>

            <?php if ($_smarty_tpl->tpl_vars['blog']->value['status']==blogBlogModel::STATUS_PUBLIC){?>
            <p>
              <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value['link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
                <a target="_blank" class="underline" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value;?>
</a><i class="icon10 new-window"></i>
              <?php } ?>
            </p>
            <?php }?>
          </div>

        </div>
      </div>

      <div class="b-post-body">


      <?php if (isset($_smarty_tpl->tpl_vars['post']->value['plugins'])&&isset($_smarty_tpl->tpl_vars['post']->value['plugins']['before'])&&$_smarty_tpl->tpl_vars['post']->value['plugins']['before']){?>

        
        <!-- plugin hook: "prepare_posts_backend.*.before" -->
        <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['post']->value['plugins']['before']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>

          <!-- begin "prepare_posts_backend.<?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
.before" -->
          <?php echo $_smarty_tpl->tpl_vars['output']->value;?>

          <!-- end "prepare_posts_backend.<?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
.before" -->
        <?php } ?>
        <!-- end plugin hook: "prepare_posts_backend.*.before" -->
      <?php }?>

      <?php echo $_smarty_tpl->tpl_vars['post']->value['text'];?>


      <?php if ($_smarty_tpl->tpl_vars['post']->value['album_id']&&$_smarty_tpl->tpl_vars['post']->value['album']['id']){?>
        <div class="b-photo-album-attached">
          <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value['album']['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
              <div class="b-photo">
                <?php if ($_smarty_tpl->tpl_vars['p']->value['description']){?>
                    <?php if (strstr($_smarty_tpl->tpl_vars['p']->value['description'],'<p>')){?>
                        <?php echo $_smarty_tpl->tpl_vars['p']->value['description'];?>

                    <?php }else{ ?>
                        <p><?php echo $_smarty_tpl->tpl_vars['p']->value['description'];?>
</p>
                    <?php }?>
                <?php }?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['p']->value['thumb_big']['url'];?>
" class="retinify" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
              </div>
          <?php } ?>
          <p><i class="icon16 pictures"></i> <em>Фотоальбом: <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['album']['backend_link'];?>
" class="bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['album']['name'], ENT_QUOTES, 'UTF-8', true);?>
</a> (<?php echo count($_smarty_tpl->tpl_vars['post']->value['album']['photos']);?>
)</em></p>
        </div>
      <?php }?>

      <?php if (isset($_smarty_tpl->tpl_vars['post']->value['plugins'])&&isset($_smarty_tpl->tpl_vars['post']->value['plugins']['after'])&&$_smarty_tpl->tpl_vars['post']->value['plugins']['after']){?>

        
        <!-- plugin hook: "prepare_posts_backend.*.after" -->
        <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['post']->value['plugins']['after']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>

          <!-- begin "prepare_posts_backend.<?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
.after" -->
          <?php echo $_smarty_tpl->tpl_vars['output']->value;?>

          <!-- end "prepare_posts_backend.<?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
.after" -->
        <?php } ?>
        <!-- end plugin hook: "prepare_posts_backend.*.after" -->
      <?php }?>

      </div>

      <div class="b-post-footer-backend">
      
      <!-- plugin hook: "backend_post.*.footer" -->
        <?php if (isset($_smarty_tpl->tpl_vars['backend_post']->value)){?>
          <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['backend_post']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
            <?php if (isset($_smarty_tpl->tpl_vars['output']->value['footer'])){?>

            <!-- begin backend_post.<?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
.footer -->
              <?php echo $_smarty_tpl->tpl_vars['output']->value['footer'];?>

            <!-- end backend_post.<?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
.footer -->
            <?php }?>
          <?php } ?>
        <?php }?>
      <!-- end plugin hook: "backend_post.*.footer" -->
      </div>

      <a name="comments"></a>
      <div class="b-comments">
        <h4>
          <span class="b-comment-count" <?php if ($_smarty_tpl->tpl_vars['post']->value['comment_count']==0){?>style="display: none;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['post']->value['comment_count'];?>
 <?php echo _w('comment','comments',$_smarty_tpl->tpl_vars['post']->value['comment_count']);?>
<!-- comment_count placeholder --></span>
          <?php if (count($_smarty_tpl->tpl_vars['post']->value['comments'])==0){?>
            <span class="b-not-comment">Нет комментариев</span>
          <?php }?>
        </h4>

        <?php if (count($_smarty_tpl->tpl_vars['post']->value['comments'])>0){?>
          <?php /*  Call merged included template "templates/actions/post/include.comments.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('templates/actions/post/include.comments.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '376859cd0e703c4491-73716995');
content_59cd0e706c9c42_67377782($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "templates/actions/post/include.comments.html" */?>
        <?php }else{ ?>
        <ul class="menu-v with-icons">
          <!-- comments placeholder -->
        </ul>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['post']->value['comments_allowed']){?>
          <h4 class="b-form-home"><a class="b-comment-reply inline-link" href="#"><b><i>Написать комментарий</i></b></a></h4>
          <ul id="b-comment-add" class="menu-v with-icons">
            <li>
              <a name="reply"></a>
              <!-- plugin hook: "comment-list-entry" -->
              <i class="icon16 userpic20" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['current_contact']->value['photo20'];?>
');"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_contact']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

              <form id="b-comment-add-form" action="?module=comments&amp;action=add&amp;id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" method="post">
              <p>
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                <textarea name="text" cols="60" rows="20"></textarea>
                <input type="hidden" name="parent" value="0">
                <br>
                <input type="button" id="send" value="Готово">

                <span class="b-comment-add-form-status b-ajax-status" style="display: none;">
                  <i class="b-ajax-status-loading icon16 loading"><!--icon --></i>
                </span>
              </p>
              </form>
            </li>
          </ul>
        <?php }?>

      </div>

    </div>

  </div>


<?php if (isset($_smarty_tpl->tpl_vars['dialogs']->value)){?>
  <form id="post-form" action="?module=post&amp;action=save" method="post">
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" name="id" id="post-id">
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['blog_id'];?>
" name="blog_id" id="blog-id">
    <!-- dialog begin -->
    <?php  $_smarty_tpl->tpl_vars['dialog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dialog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dialogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dialog']->key => $_smarty_tpl->tpl_vars['dialog']->value){
$_smarty_tpl->tpl_vars['dialog']->_loop = true;
?>
      <?php echo $_smarty_tpl->tpl_vars['dialog']->value;?>

    <?php } ?>
    <!-- dialog end -->
  </form>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['post']->value['album_id']&&$_smarty_tpl->tpl_vars['post']->value['album']['id']&&blogPhotosBridge::is2xEnabled()){?>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.retina.min.js"></script>
    <script>$(function() { "use strict";
        $.Retina && $('img.retinify').retina();
    });</script>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('wa_js', array('file'=>"js/blog-post.min.js")); $_block_repeat=true; echo smarty_block_wa_js(array('file'=>"js/blog-post.min.js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/blogPost.js
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wa_js(array('file'=>"js/blog-post.min.js"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2017-09-28 18:00:00
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-apps\blog\templates\dialogs\postDelete.html" */ ?>
<?php if ($_valid && !is_callable('content_59cd0e704a2f44_16611358')) {function content_59cd0e704a2f44_16611358($_smarty_tpl) {?><div class="dialog" id="postdelete-dialog">
  <div class="dialog-background"> </div>
  <div class="dialog-window" style="height: 180px; min-height: 180px; width: 400px; min-width: 400px">
    <div class="dialog-content">
      <div class="dialog-content-indent">
        <?php if (isset($_smarty_tpl->tpl_vars['post']->value)&&$_smarty_tpl->tpl_vars['post']->value){?>
          <h1>Удалить запись</h1>
          <p><?php echo sprintf('Запись «<b>%s</b>» будет удалена без возможности восстановления. Удалить?',htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['post']->value['title'])===null||$tmp==='' ? '(нет заголовка)' : $tmp), ENT_QUOTES, 'UTF-8', true));?>
</p>
        <?php }else{ ?>
          <h1>Удалить записи</h1>
          <p>Выбранные записи будут удалены без возможности восстановления. Удалить?</p>
        <?php }?>
      </div>
    </div>
    <div class="dialog-buttons">
      <div class="dialog-buttons-gradient">
        <input type="button" name="delete" class="button red" value="Удалить">
        или <a href="#" class="cancel">отменить</a>
      </div>
    </div>
  </div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2017-09-28 18:00:00
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-apps\blog\templates\actions\post\include.comments.html" */ ?>
<?php if ($_valid && !is_callable('content_59cd0e706c9c42_67377782')) {function content_59cd0e706c9c42_67377782($_smarty_tpl) {?>
<!-- comments begin -->
<?php $_smarty_tpl->tpl_vars['depth'] = new Smarty_variable(-1, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
  <?php if ($_smarty_tpl->tpl_vars['comment']->value['depth']<$_smarty_tpl->tpl_vars['depth']->value){?>
    <?php $_smarty_tpl->tpl_vars['loop'] = new Smarty_variable(($_smarty_tpl->tpl_vars['depth']->value-$_smarty_tpl->tpl_vars['comment']->value['depth']), null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['name'] = "end-comment";
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['loop']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['total']);
?>

        </li>
      </ul>
    <?php endfor; endif; ?>
    <?php $_smarty_tpl->tpl_vars['depth'] = new Smarty_variable($_smarty_tpl->tpl_vars['comment']->value['depth'], null, 0);?>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['comment']->value['depth']==$_smarty_tpl->tpl_vars['depth']->value){?>

    </li>
    <li>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['comment']->value['depth']>$_smarty_tpl->tpl_vars['depth']->value){?>

  <ul class="menu-v with-icons">
    <li>
    <?php $_smarty_tpl->tpl_vars['depth'] = new Smarty_variable($_smarty_tpl->tpl_vars['comment']->value['depth'], null, 0);?>
  <?php }?>
    <?php /*  Call merged included template "../comments/include.comment.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../comments/include.comment.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('allow_reply'=>$_smarty_tpl->tpl_vars['post']->value['comments_allowed'],'single_view'=>true), 0, '376859cd0e703c4491-73716995');
content_59cd0e70737260_48918596($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../comments/include.comment.html" */?>
    <!-- sub comment placeholder -->
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['name'] = "end-comment";
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['depth']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['total']);
?>

      </li>
    </ul>
<?php endfor; endif; ?>
  </li>
</ul>
<!-- comments end --><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2017-09-28 18:00:00
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-apps\blog\templates\actions\comments\include.comment.html" */ ?>
<?php if ($_valid && !is_callable('content_59cd0e70737260_48918596')) {function content_59cd0e70737260_48918596($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-system/vendors/smarty-plugins\\modifier.wa_datetime.php';
?>
<div class="b-comment <?php if ($_smarty_tpl->tpl_vars['comment']->value['status']==blogCommentModel::STATUS_DELETED){?>b-deleted<?php }?>" id="b-comment-<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
" data-comment-id="<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
">
  <span class="b-comment-auth-<?php echo (($tmp = @$_smarty_tpl->tpl_vars['comment']->value['auth_provider'])===null||$tmp==='' ? blogCommentModel::AUTH_USER : $tmp);?>
">
    <?php $_smarty_tpl->_capture_stack[0][] = array('commentor_name', null, null); ob_start(); ?>
      <i class="icon16<?php if (!$_smarty_tpl->tpl_vars['comment']->value['auth_provider']||$_smarty_tpl->tpl_vars['comment']->value['auth_provider']==blogCommentModel::AUTH_GUEST||$_smarty_tpl->tpl_vars['comment']->value['auth_provider']==blogCommentModel::AUTH_USER){?> userpic20<?php }?>" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['comment']->value['user']['photo_url_20'];?>
');"></i><span class="bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['user']['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php if ($_smarty_tpl->tpl_vars['contact_rights']->value&&$_smarty_tpl->tpl_vars['comment']->value['contact_id']!=0){?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
contacts/#/contact/<?php echo $_smarty_tpl->tpl_vars['comment']->value['contact_id'];?>
" class="bold">
        <?php echo Smarty::$_smarty_vars['capture']['commentor_name'];?>

      </a>
    <?php }elseif($_smarty_tpl->tpl_vars['comment']->value['site']){?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['site'];?>
">
        <?php echo Smarty::$_smarty_vars['capture']['commentor_name'];?>

      </a>
    <?php }else{ ?>
      <?php echo Smarty::$_smarty_vars['capture']['commentor_name'];?>

    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['comment']->value['contact_id']&&$_smarty_tpl->tpl_vars['comment']->value['email']){?>
      <span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
</span>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['comment']->value['plugins'])&&isset($_smarty_tpl->tpl_vars['comment']->value['plugins']['authorname_suffix'])&&$_smarty_tpl->tpl_vars['comment']->value['plugins']['authorname_suffix']){?>

      
      <!-- plugin hook: "prepare_comments_backend.*.authorname_suffix" -->
      <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comment']->value['plugins']['authorname_suffix']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>

        <!-- begin "prepare_comments_backend.<?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
.authorname_suffix" -->
        <?php echo $_smarty_tpl->tpl_vars['output']->value;?>

        <!-- end "prepare_comments_backend.<?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
.authorname_suffix" -->
      <?php } ?>
      <!-- end plugin hook: "prepare_comments_backend.*.authorname_suffix" -->
    <?php }?>
  </span>

  <?php if (isset($_smarty_tpl->tpl_vars['comment']->value['plugins'])&&isset($_smarty_tpl->tpl_vars['comment']->value['plugins']['before'])&&$_smarty_tpl->tpl_vars['comment']->value['plugins']['before']){?>

    
    <!-- plugin hook: "prepare_comments_backend.*.before" -->
    <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comment']->value['plugins']['before']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>

      <!-- begin "prepare_comments_backend.<?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
.before" -->
      <?php echo $_smarty_tpl->tpl_vars['output']->value;?>

      <!-- end "prepare_comments_backend.<?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
.before" -->
    <?php } ?>
    <!-- end plugin hook: "prepare_comments_backend.*.before" -->
  <?php }?>

  <span class="hint">
    <?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['comment']->value['datetime'],"humandatetime");?>
, <?php echo $_smarty_tpl->tpl_vars['comment']->value['ip'];?>

  </span>

  <?php if ($_smarty_tpl->tpl_vars['comment']->value['editable']){?>
    <a href="#" class="small b-comment-delete" <?php if ($_smarty_tpl->tpl_vars['comment']->value['status']==blogCommentModel::STATUS_DELETED){?>style="display: none;"<?php }?> >удалить</a>
    <a href="#" class="small b-comment-restore" <?php if ($_smarty_tpl->tpl_vars['comment']->value['status']==blogCommentModel::STATUS_PUBLISHED){?>style="display: none;"<?php }?> >восстановить</a>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['comment']->value['status']==blogCommentModel::STATUS_DELETED&&!$_smarty_tpl->tpl_vars['comment']->value['editable']){?>
    <p class="b-comment-text">Комментарий удален</p>
  <?php }else{ ?>
    <?php if (isset($_smarty_tpl->tpl_vars['comment']->value['post'])&&(!$_smarty_tpl->tpl_vars['comment']->value['post']||(!$_smarty_tpl->tpl_vars['comment']->value['editable']&&($_smarty_tpl->tpl_vars['comment']->value['post']&&$_smarty_tpl->tpl_vars['comment']->value['post']['status']!=blogPostModel::STATUS_PUBLISHED)))){?>
        <p class="b-comment-text gray">
            <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['text'], ENT_QUOTES, 'UTF-8', true));?>
</span>
        </p>
        <p class="b-comment-text hint italic">Комментарий к записи, которая была снята с публикации</p>
      
    <?php }else{ ?>
       
      <p class="b-comment-text">
          <span<?php if (isset($_smarty_tpl->tpl_vars['comment']->value['new'])){?> class="highlighted"<?php }?>><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['text'], ENT_QUOTES, 'UTF-8', true));?>
</span>
      </p>
            
      <?php if (isset($_smarty_tpl->tpl_vars['comment']->value['post'])&&$_smarty_tpl->tpl_vars['comment']->value['post']&&(!isset($_smarty_tpl->tpl_vars['single_view']->value)||!$_smarty_tpl->tpl_vars['single_view']->value)){?>
          <p class="hint">
            к записи
            <?php if ($_smarty_tpl->tpl_vars['comment']->value['post']['blog_status']==blogBlogModel::STATUS_PRIVATE){?>
                <i class="icon10 lock-bw no-overhanging"></i>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['comment']->value['post'])&&$_smarty_tpl->tpl_vars['comment']->value['post']&&$_smarty_tpl->tpl_vars['comment']->value['editable']||(isset($_smarty_tpl->tpl_vars['comment']->value['post'])&&$_smarty_tpl->tpl_vars['comment']->value['post']&&$_smarty_tpl->tpl_vars['comment']->value['post']['status']==blogPostModel::STATUS_PUBLISHED)){?>
              <a href="<?php if ($_smarty_tpl->tpl_vars['comment']->value['post']['status']==blogPostModel::STATUS_PUBLISHED&&$_smarty_tpl->tpl_vars['comment']->value['post']['blog_status']==blogBlogModel::STATUS_PUBLIC&&$_smarty_tpl->tpl_vars['comment']->value['post']['link']){?><?php echo $_smarty_tpl->tpl_vars['comment']->value['post']['link'][0];?>
<?php }else{ ?>?module=post&amp;id=<?php echo $_smarty_tpl->tpl_vars['comment']->value['post_id'];?>
<?php if ($_smarty_tpl->tpl_vars['comment']->value['post']['status']==blogPostModel::STATUS_PUBLISHED){?>#comments<?php }else{ ?>&amp;action=edit<?php }?><?php }?>"><span<?php if ($_smarty_tpl->tpl_vars['comment']->value['post']['color']&&$_smarty_tpl->tpl_vars['comment']->value['post']['color']!='b-white'){?> class="b-<?php echo substr($_smarty_tpl->tpl_vars['comment']->value['post']['color'],2);?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['post']['title'], ENT_QUOTES, 'UTF-8', true);?>
</span></a>
            <?php }else{ ?>
              отключенная запись
            <?php }?>
          </p>
      <?php }?>
      
      <?php if ($_smarty_tpl->tpl_vars['comment']->value['parent']&&isset($_smarty_tpl->tpl_vars['comment']->value['parent_text'])){?>
        <p class="hint">ответ на комментарий <strong><?php if ($_smarty_tpl->tpl_vars['comment']->value['parent_status']==blogCommentModel::STATUS_DELETED&&!$_smarty_tpl->tpl_vars['comment']->value['editable']){?><strike>Комментарий удален</strike><?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['parent_text'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></strong></p>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['allow_reply']->value){?>
        <a href="#" class="b-comment-reply small inline-link"><b><i>ответить</i></b></a>
      <?php }?>
    <?php }?>
  <?php }?>

  <?php if (isset($_smarty_tpl->tpl_vars['comment']->value['plugins'])&&isset($_smarty_tpl->tpl_vars['comment']->value['plugins']['after'])&&$_smarty_tpl->tpl_vars['comment']->value['plugins']['after']){?>

    
    <!-- plugin hook: "prepare_comments_backend.*.after" -->
    <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comment']->value['plugins']['after']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>

      <!-- begin "prepare_comments_backend.<?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
.after" -->
      <?php echo $_smarty_tpl->tpl_vars['output']->value;?>

      <!-- end "prepare_comments_backend.<?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
.after" -->
    <?php } ?>
    <!-- end plugin hook: "prepare_comments_backend.*.after" -->
  <?php }?>
</div>
<?php }} ?>