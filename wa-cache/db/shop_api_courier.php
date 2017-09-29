<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
  ),
  'enabled' => 
  array (
    'type' => 'int',
    'params' => '1',
    'null' => 0,
    'default' => '1',
  ),
  'contact_id' => 
  array (
    'type' => 'int',
    'params' => '11',
  ),
  'create_datetime' => 
  array (
    'type' => 'datetime',
    'null' => 0,
  ),
  'orders_processed' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '0',
  ),
  'note' => 
  array (
    'type' => 'text',
  ),
  'api_token' => 
  array (
    'type' => 'varchar',
    'params' => '32',
  ),
  'api_pin' => 
  array (
    'type' => 'varchar',
    'params' => '32',
  ),
  'api_pin_expire' => 
  array (
    'type' => 'datetime',
  ),
  'api_last_use' => 
  array (
    'type' => 'datetime',
  ),
  'all_storefronts' => 
  array (
    'type' => 'int',
    'params' => '1',
    'null' => 0,
    'default' => '1',
  ),
);
