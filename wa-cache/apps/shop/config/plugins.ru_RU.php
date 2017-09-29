<?php
return array (
  'migrate' => 
  array (
    'name' => 'Переход на Shop-Script',
    'description' => 'Перенос данных в Shop-Script из других CMS для интернет-магазинов',
    'img' => 'wa-apps/shop/plugins/migrate/img/migrate.png',
    'vendor' => 'webasyst',
    'version' => '2.1.1',
    'importexport' => true,
    'handlers' => 
    array (
      'backend_welcome' => 'backendWelcomeHandler',
    ),
    'id' => 'migrate',
    'app_id' => 'shop',
  ),
  'redirect' => 
  array (
    'name' => '301 Редирект',
    'description' => 'Помогает перейти на Shop-Script с других CMS и обновить адреса страниц интернет-магазина, сохранив их индексацию поисковыми системами.',
    'vendor' => 'webasyst',
    'version' => '1.1',
    'img' => 'wa-apps/shop/plugins/redirect/img/redirect.png',
    'icons' => 
    array (
      16 => 'img/redirect.png',
    ),
    'shop_settings' => true,
    'handlers' => 
    array (
      'frontend_error' => 'frontendError',
      'frontend_search' => 'frontendSearch',
    ),
    'id' => 'redirect',
    'app_id' => 'shop',
    'custom_settings' => true,
  ),
);
