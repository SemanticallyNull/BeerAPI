<?php
/**
 * Log model
 *
 * Defines the Log type. Annotations for Doctrine.
 * 
 * @package BeerAPI
 * @author Ben Chapman <hello@benchapman.ie>
 * @copyright 2013 Ben Chapman
 *
 * @Entity @Table(name="log")
 */
 
class Log {
    /** @Id @Column(type="integer") @AutoGenerate **/
    public $id;
    /** @Id @Column(type="bigint") **/
    public $beer_barcode;
    /** @Column(type="string") **/
    public $action;
    /** @Column(type="string") **/
    public $location;
    /** @Column(type="integer") **/
    public $number;
    /** @Column(type="datetime") **/
    public $timestamp;
}

?>