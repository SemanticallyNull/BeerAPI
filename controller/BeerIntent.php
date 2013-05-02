<?php
/*
 * Beer Intent Controller
 */

class BeerIntent extends Beer {
  
  public function __construct(PDO $db, $barcode = false) {
    parent::__construct($db, $barcode);
  }
  
}