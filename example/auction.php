<?php
use Barnebys\Protocol\Object;
use Barnebys\Protocol\Auction;
use Barnebys\Protocol\Price;

date_default_timezone_set('America/Los_Angeles');

require_once __DIR__ . '/../vendor/autoload.php';

$object = new Object();
$object ->setTitle('Rolex 1956')
        ->setDescription('A fine watch in mint condition.')
        ->setURL('http://test.com/lot/1234')
        ->setImage('http://test.com/lot/1234.jpg')
        ->setCategory('watches')
        ->setPrice(new Price(150, 200, 'EUR'))
        ->setAuction(new Auction('2017-04-22T15:03:01.012345Z', '2017-08-01T15:03:01.012345Z'));

echo $object;