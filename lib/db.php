<?php
/*
 *  Database
 */

class DB {
  
  private $_db = false;
  
  function getDb() {
    if(!$this->_db) {
      $this->_db = new PDO('mysql:host=localhost;dbname=beerapi','root');
    }
    return $this->_db;
  }
  
}