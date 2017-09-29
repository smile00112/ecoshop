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
  ),
  'description' => 
  array (
    'type' => 'text',
  ),
  'ext' => 
  array (
    'type' => 'varchar',
    'params' => '10',
  ),
  'size' => 
  array (
    'type' => 'int',
    'params' => '11',
  ),
  'type' => 
  array (
    'type' => 'varchar',
    'params' => '50',
  ),
  'rate' => 
  array (
    'type' => 'decimal',
    'params' => '3,2',
    'null' => 0,
    'default' => '0.00',
  ),
  'width' => 
  array (
    'type' => 'int',
    'params' => '5',
    'null' => 0,
    'default' => '0',
  ),
  'height' => 
  array (
    'type' => 'int',
    'params' => '5',
    'null' => 0,
    'default' => '0',
  ),
  'contact_id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
  ),
  'upload_datetime' => 
  array (
    'type' => 'datetime',
    'null' => 0,
  ),
  'edit_datetime' => 
  array (
    'type' => 'datetime',
  ),
  'status' => 
  array (
    'type' => 'smallint',
    'params' => '6',
    'null' => 0,
    'default' => '0',
  ),
  'hash' => 
  array (
    'type' => 'varchar',
    'params' => '32',
    'null' => 0,
    'default' => '',
  ),
  'url' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'parent_id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '0',
  ),
  'stack_count' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '0',
  ),
  'sort' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '0',
  ),
  'source' => 
  array (
    'type' => 'varchar',
    'params' => '32',
    'null' => 0,
    'default' => 'backend',
  ),
  'app_id' => 
  array (
    'type' => 'varchar',
    'params' => '64',
  ),
);
