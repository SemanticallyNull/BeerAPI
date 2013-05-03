<?php
/*
 * Beer Intent Controller
 */

class BeerIntent extends Beer {
  
  public function __construct(PDO $db, $barcode = false) {
    parent::__construct($db, $barcode);
  }
  
  public function take($num) {
    $num = (int) $num ?:1;
    $this->fridge_count -= $num;
    $this->total_count -= $num;
    $this->save();
    return $this->getPublicData();
  }
  
}