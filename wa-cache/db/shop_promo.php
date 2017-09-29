<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'params' => '10',
    'unsigned' => 1,
    'null' => 0,
    'autoincrement' => 1,
  ),
  'type' => 
  array (
    'type' => 'varchar',
    'params' => '32',
    'null' => 0,
    'default' => 'link',
  ),
  'title' => 
  array (
    'type' => 'text',
  ),
  'body' => 
  array (
    'type' => 'text',
  ),
  'link' => 
  array (
    'type' => 'text',
  ),
  'color' => 
  array (
    'type' => 'varchar',
    'params' => '8',
  ),
  'background_color' => 
  array (
    'type' => 'varchar',
    'params' => '8',
  ),
  'ext' => 
  array (
    'type' => 'varchar',
    'params' => '6',
    'null' => 0,
  ),
  'enabled' => 
  array (
    'type' => 'tinyint',
    'params' => '1',
    'null' => 0,
    'default' => '1',
  ),
  'countdown_datetime' => 
  array (
    'type' => 'datetime',
  ),
);
