<?php
return array (
  'search' => 
  array (
    'name' => 'Поиск',
    'description' => 'Поиск по текстовым страницам сайта',
    'vendor' => '972539',
    'version' => '0.0.2',
    'img' => 'wa-apps/site/plugins/search/img/search.png',
    'frontend' => true,
    'handlers' => 
    array (
      'backend_sidebar' => 'backendSidebar',
      'routing' => 'routing',
    ),
    'id' => 'search',
    'app_id' => 'site',
  ),
);
