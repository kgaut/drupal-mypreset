<?php
class Nodelog extends MyObject {
  protected static $db_table_name = 'node_logs';
  protected static $db_table_identifier = 'nlid';
  public $nlid;
  public $node;
  public $created;
  public $user;
}