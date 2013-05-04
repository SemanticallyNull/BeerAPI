<?php
/**
 * Default configuration
 * 
 * @package BeerAPI
 * @author Ben Chapman <hello@benchapman.ie>
 * @copyright 2013 Ben Chapman
 */
return [
    'env' => $_SERVER['FRAMEWORK_ENV'] ?: 'development',
    'db' => [
        'driver'    => 'pdo_mysql',
        'host'      => $_SERVER['DB_HOST'] ?: '127.0.0.1',
        'dbname'      => $_SERVER['DB_NAME'] ?: 'beerapi_clean',
        'user'  => $_SERVER['DB_USER'] ?: 'root',
        'password'  => $_SERVER['DB_PASS'] ?: '',
        'charset'  => 'utf8',
    ],
];

?>