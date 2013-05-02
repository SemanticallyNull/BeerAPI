<?php
/*
 *  Database
 */

class DB {
  
  private $_db = false;
  
  function getDb() {
    if(!$this->_db) {
      $this->_db = new PDO('mysql:host='.$_SERVER['DB_HOST'].';dbname='.$_SERVER['DB_NAME'],$_SERVER['DB_USER'],$_SERVER['DB_PASS']);
    }
    return $this->_db;
  }
  
}
