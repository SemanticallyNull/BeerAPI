<?php
/**
 * Bootstrap
 * 
 * @package BeerAPI
 * @author Ben Chapman <hello@benchapman.ie>
 * @copyright 2013 Ben Chapman
 */

namespace BeerAPI;

define(BASEDIR, dirname(__DIR__));
require_once BASEDIR.'/vendor/autoload.php';

$appconfig = require 'config/default.php';

$emconfig = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(array(__DIR__."/model"), $appconfig['env']==="development");
$em = \Doctrine\ORM\EntityManager::create($appconfig['db'],$emconfig);

//dispatch();
?>