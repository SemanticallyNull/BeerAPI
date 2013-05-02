<?php
/*
 * BeetAPI
 *
 * An API for tracking beer at Engine Yard Dublin
 */
define('BASEDIR', dirname(__DIR__));
require_once BASEDIR.'/lib/klein.php';
require_once BASEDIR.'/lib/db.php';
require_once BASEDIR.'/autoloader.php';

respond(function($request,$response,$app){
  $db = new DB();
  $app->db = $db->getDb();
});

respond('/', function() {
  include BASEDIR.'/public/index.html';
});

respond('/beers?/[:barcode]', function($request,$response,$app) {
  $beer_intent = new BeerIntent($app->db,$request->barcode);
  $response->json($beer_intent->getPublicData());
});
respond('/beers?', function($request,$response,$app) {
  $beers = BeerIntent::getAllPublic($app->db);
  $response->json($beers);
});

dispatch();
?>