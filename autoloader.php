<?php
function model_autoloader($class) {
  $file_path = BASEDIR.'/model/' . $class . '.php';
  if(file_exists($file_path)) {
    require_once $file_path;
  }
}
spl_autoload_register('model_autoloader');
function controller_autoloader($class) {
  $file_path = BASEDIR.'/controller/' . $class . '.php';
  if(file_exists($file_path)) {
    require_once $file_path;
  }
}
spl_autoload_register('controller_autoloader');