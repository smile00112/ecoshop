<?php
return array (
  'emailsubscription' => 
  array (
    'name' => 'Подписка по почте',
    'description' => 'Позволяет пользователям бекенда получать email-уведомления о новых записях в блогах',
    'img' => 'wa-apps/blog/plugins/emailsubscription/img/emailsubscription.png',
    'version' => '1.0.0',
    'blog_settings' => true,
    'vendor' => 'webasyst',
    'handlers' => 
    array (
      'post_publish' => 'postPublishAction',
      'cron_action' => 'cronAction',
      'backend_stream' => 'blogAction',
      'backend_blog_edit' => 'settingsAction',
      'contacts_delete' => 'contactsDelete',
    ),
    'id' => 'emailsubscription',
    'app_id' => 'blog',
    'custom_settings' => true,
  ),
);
