<?php
/**
 * Beer model
 *
 * Defines the Beer type. Annotations for Doctrine.
 * 
 * @package BeerAPI
 * @author Ben Chapman <hello@benchapman.ie>
 * @copyright 2013 Ben Chapman
 *
 * @Entity @Table(name="beers")
 */
 
class Beer {
    /** @Id @Column(type="bigint") **/
    public $barcode;
    /** @Coulmn(type="string") **/
    public $name;
    /** @Column(type="string") **/
    public $brewer;
    /** @Column(type="string") **/
    public $type;
    /** @Column(type="integer") **/
    public $capacity;
    /** @Column(type="decimal",precision=4,scale=2) **/
    public $abv;
    /** @Column(type="text") **/
    public $description;
    /** @Column(type="string") **/
    public $image_url;
    /** @Column(type="integer") **/
    public $fridge_count;
    /** @Column(type="integer") **/
    public $total_count;
    /** @Column(type="datetime") **/
    public $created_at;
}

?>