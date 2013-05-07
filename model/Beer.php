<?php
/*
 * Beer Model
 */
 
class Beer {

  protected $db;

  public $barcode;
  public $name;
  public $brewer;
  public $type;
  public $capacity;
  public $abv;
  public $upvotes;
  public $downvotes;
  public $description;
  public $image_url;
  public $fridge_count;
  public $total_count;
	public $display;
  public $created_at;

  public function __construct(PDO $db, $barcode = false) {
    $this->db = $db;
    if($barcode) {
      $this->barcode = (int) $barcode;
      $this->update($barcode);
    }
  }
  
  public function update() {
    $query = $this->db->prepare('SELECT * FROM `beers` WHERE `barcode` = :barcode');
    $query->execute(array(':barcode'=>(int)$this->barcode));
    if($rows = $query->fetchObject()) {
      foreach($rows as $key => $value) {
        $this->$key = $value;
      }
    } else {
      $this->barcode = false;
    }
  }
  
  public static function getAllPublic(PDO $db) {
    $rows = $db->query('SELECT * FROM `beers` WHERE `display` = 1')->fetchAll(PDO::FETCH_OBJ);
    foreach($rows as $row) {
      $data[] = self::normalisePublicData($row);
    }
    shuffle($data);
    return $data;
  }
  
  public function getPublicData() {
    $this->update($this->barcode);
    $data = [
      "barcode" => (int) $this->barcode,
      "name" => $this->name,
      "brewer" => $this->brewer,
      "type" => $this->type,
      "capacity" => (int) $this->capacity,
      "abv" => (float) $this->abv,
      "description" => $this->description,
      "image_url" => $this->image_url,
      "created_at" => $this->created_at,
      "fridge_count" => (int) $this->fridge_count,
      "total_count" => (int) $this->total_count,
			"display" => (bool) $this->display
    ];
    return $data;
  }

  public static function normalisePublicData($row) {
    $data = [
      "barcode" => (int) $row->barcode,
      "name" => $row->name,
      "brewer" => $row->brewer,
      "type" => $row->type,
      "capacity" => (int) $row->capacity,
      "abv" => (float) $row->abv,
      "description" => $row->description,
      "image_url" => $row->image_url,
      "created_at" => $row->created_at,
      "fridge_count" => (int) $row->fridge_count,
      "total_count" => (int) $row->total_count,
			"display" => (bool) $row->display
    ];
    return $data;
  }
  
}