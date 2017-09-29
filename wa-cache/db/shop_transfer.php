<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'string_id' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'create_datetime' => 
  array (
    'type' => 'datetime',
  ),
  'finalize_datetime' => 
  array (
    'type' => 'datetime',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'params' => '\'sent\',\'completed\',\'cancelled\'',
    'null' => 0,
    'default' => 'sent',
  ),
  'stock_id_from' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
  ),
  'stock_id_to' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
  ),
);
