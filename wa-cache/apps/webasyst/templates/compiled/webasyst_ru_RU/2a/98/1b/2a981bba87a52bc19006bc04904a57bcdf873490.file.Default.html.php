<?php /* Smarty version Smarty-3.1.14, created on 2017-09-27 15:35:27
         compiled from "C:\OpenServer\domains\ecoshop.testers-site.ru\public_html\wa-widgets\news\templates\Default.html" */ ?>
<?php /*%%SmartyHeaderCode:2383559cb9b0f1b0fd1-25330294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a981bba87a52bc19006bc04904a57bcdf873490' => 
    array (
      0 => 'C:\\OpenServer\\domains\\ecoshop.testers-site.ru\\public_html\\wa-widgets\\news\\templates\\Default.html',
      1 => 1506500836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2383559cb9b0f1b0fd1-25330294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rss_url' => 0,
    'uniqid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59cb9b0f22dff7_75911691',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cb9b0f22dff7_75911691')) {function content_59cb9b0f22dff7_75911691($_smarty_tpl) {?><style>
.wa-news-widget .snw-entry { margin-bottom: 10px; line-height: 1em; font-family: 'Helvetica Neue', Arial, sans-serif; }
.wa-news-widget .snw-entry a { text-decoration: none; }

.wa-empty-feed { margin: 30px 20px; font-weight: normal; }

.widget-2x1 .wa-empty-feed { margin: 45px 55px; }
.widget-2x2 .wa-empty-feed { margin: 105px 35px; }

.widget-block .wa-news-widget .wa-link-to-all-news {
    position: absolute; bottom: 0; left: 0; right: 0; text-align: center; opacity: 0; padding: 18px 0 0; transition: opacity 0.5s ease-in-out;
    background: -moz-linear-gradient(top,  rgba(255,255,255,0) 0%, rgba(255,255,255,1) 47%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0)), color-stop(47%,rgba(255,255,255,1))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 47%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 47%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 47%); /* IE10+ */
    background: linear-gradient(to bottom,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 47%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
}
.widget-block:hover .wa-news-widget .wa-link-to-all-news { opacity: 1; }

/* TV */
.tv .widget-block .wa-news-widget .wa-link-to-all-news {
    background: -moz-linear-gradient(top,  rgba(51,51,51,0) 0%, rgba(51,51,51,1) 47%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(51,51,51,0)), color-stop(47%,rgba(51,51,51,1))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  rgba(51,51,51,0) 0%,rgba(51,51,51,1) 47%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  rgba(51,51,51,0) 0%,rgba(51,51,51,1) 47%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  rgba(51,51,51,0) 0%,rgba(51,51,51,1) 47%); /* IE10+ */
    background: linear-gradient(to bottom,  rgba(51,51,51,0) 0%,rgba(51,51,51,1) 47%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00515151', endColorstr='#515151',GradientType=0 ); /* IE6-9 */
}
</style>

<?php if (empty($_smarty_tpl->tpl_vars['rss_url']->value)){?>

    <div class="block">
        <h5 class="align-center hint wa-empty-feed">Выберите источник новостей в настройках виджета.</h5>
    </div>

<?php }else{ ?>

<div class="block wa-news-widget" id="<?php echo $_smarty_tpl->tpl_vars['uniqid']->value;?>
">
    <p class="snw-entry hidden template">
        <a href="" class="entry-title entry-link" target="_blank"></a>
        <span class="entry-datetime hint"></span>
    </p>

    <div class="hidden wa-link-to-all-news"><div class="block">
        <a href="javascript:void(0)" target="_blank">Показать все новости <i class="icon16 new-window"></i></a>
    </div></div>
</div>


<script>(function() { "use strict";
    var $wrapper = $('#<?php echo $_smarty_tpl->tpl_vars['uniqid']->value;?>
');
    var rss_url = <?php echo json_encode($_smarty_tpl->tpl_vars['rss_url']->value);?>
;
    var error_string = "Ошибка загрузки ленты новостей";

    (function() {
        if (window.google && google.load) {
            return $.Deferred(function(d) {
                d.resolve();
            });
        } else {
            return $.ajax({
                dataType: "script",
                url: '\/\/www.google.com/jsapi',
                cache: true
            });
        }
    })().done(function() {
        google.load("feeds", "1", {
            callback: function() {
                var feed = new google.feeds.Feed(rss_url);
                feed.setNumEntries(15);
                updateFeed(feed);
                setInterval(function() {
                    updateFeed(feed);
                }, 15*60000);
            }
        });
    });

    function updateFeed(feed) {
        feed.load(function (data) {
            data.feed.link && $wrapper.find('.wa-link-to-all-news').show().find('a').attr('href', data.feed.link);
            $wrapper.children('.snw-entry:not(.template)').remove();
            if (data.error) {
                showError(data.error);
            } else {
                buildTable(data.feed.entries);
            }
        });
    }

    function buildTable(entries) {
        var $template = $wrapper.children('.template');
        var blocks = [];
        entries.forEach(function(entry) {
            var $entry = $template.clone().removeClass('hidden template');
            $entry.find('.entry-datetime').text((new Date(entry.publishedDate)).toLocaleString());
            $entry.find('.entry-title').text(entry.title);
            $entry.find('.entry-link').attr('href', entry.link);
            blocks.push($entry);
        });
        $wrapper.append(blocks);
    }

    function showError(error) {
        console && console.log(error);
        var $entry = $wrapper.children('.template').clone().removeClass('hidden template').addClass('errormsg').empty();
        $entry.append($('<p class="align-center">').text(error_string)).appendTo($wrapper);
    }

})();</script>

<?php }?>
<?php }} ?>