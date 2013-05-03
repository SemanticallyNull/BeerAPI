<?php
/*
 * Beer Intent Controller
 */

class BeerIntent extends Beer {
  
  public function __construct(PDO $db, $barcode = false) {
    parent::__construct($db, $barcode);
  }
  
  public function take($num) {
    if(!$this->barcode) return ['error'=>'Not a beer'];
    $num = (int) $num ?:1;
    $barcode = (int) $this->barcode;
    if($this->fridge_count <= 0) return ['error'=>'We\'re out'];
    $this->fridge_count -= $num;
    $this->total_count -= $num;
    $this->db->query('UPDATE `beers` SET `fridge_count` = `fridge_count` - '.$num.' WHERE `barcode` = '.$barcode);
    $this->db->query('INSERT INTO `log` SET `beer_barcode`='.$barcode.', `action`=\'take\', `number`='.$num.', `timestamp`=NOW()');
    return $this->getPublicData();
  }
  
  public function add($num) {
    if(!$this->barcode) return ['error'=>'Not a beer'];
    $num = (int) $num ?:1;
    $barcode = (int) $this->barcode;
    $this->fridge_count += $num;
    $this->db->query('UPDATE `beers` SET `fridge_count` = `fridge_count` + '.$num.' WHERE `barcode` = '.$barcode);
    $this->db->query('INSERT INTO `log` SET `beer_barcode`='.$barcode.', `action`=\'take\', `number`='.$num.', `timestamp`=NOW()');
    return $this->getPublicData();
  }
  
}