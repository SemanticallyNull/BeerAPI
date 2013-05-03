<?php
/*
 *  Database
 */

class DB {
  
  private $_db = false;
  
  function getDb() {
    if(!$this->_db) {
      if(!isset($_SERVER['DB_HOST'])) {
        $this->_db = new PDO('mysql:host=127.0.0.1;dbname=beerapi','root');
      } else {
        $this->_db = new PDO('mysql:host='.$_SERVER['DB_HOST'].';dbname='.$_SERVER['DB_NAME'],$_SERVER['DB_USER'],$_SERVER['DB_PASS']);
      }
    }
    return $this->_db;
  }
  
}
