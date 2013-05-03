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
  if($request->param('api_key') != md5("EYBeerApiIsAwesome")) die('API Key please!');
  $db = new DB();
  $app->db = $db->getDb();
});

respond('/', function($request) {
  include BASEDIR.'/public/htmlview.php';
});

respond('/beers?', function($request,$response,$app) {
  $beers = BeerIntent::getAllPublic($app->db);
  $response->json($beers);
});
respond('/beers?/[:barcode]/[:action]?/[:number]?', function($request,$response,$app) {
  $beer_intent = new BeerIntent($app->db,$request->barcode);
  if(!$request->action) {
    $response->json($beer_intent->getPublicData());
  } else {
    $response->json($beer_intent->{$request->action}($request->number));
  }
});

dispatch();
?>