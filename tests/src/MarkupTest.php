<?php

namespace Barnebys\Tests;

use Barnebys\Protocol\Object;
use Barnebys\Protocol\Price;
use Barnebys\Protocol\Auction;

class MarkupTest extends TestCase
{
    /**
     * @var \Barnebys\Protocol\Object
     */
    private $markup;

    public function setUp()
    {
        $this->markup = new Object();
    }

    public function testMarkupAuction()
    {

        $markup = new Object();

        $markup->setTitle('Rolex 1956')
            ->setDescription('A fine watch in mint condition.')
            ->setURL('http://test.com/lot/1234')
            ->setImage('http://test.com/lot/1234.jpg')
            ->setCategory('watches')
            ->setPrice(new Price(150, 200, 'EUR'))
            ->setAuction(new Auction('2017-04-22T15:03:01.012345Z', '2017-08-01T15:03:01.012345Z'));

        $expected = <<<EOF
<meta property="barnebys:title" content="Rolex 1956">
<meta property="barnebys:description" content="A fine watch in mint condition.">
<meta property="barnebys:url" content="http://test.com/lot/1234">
<meta property="barnebys:image" content="http://test.com/lot/1234.jpg">
<meta property="barnebys:category" content="watches">
<meta property="barnebys:price:amount" content="150">
<meta property="barnebys:price:bid" content="200">
<meta property="barnebys:price:currency" content="EUR">
<meta property="barnebys:auction:start" content="2017-04-22T15:03:01+00:00">
<meta property="barnebys:auction:end" content="2017-08-01T15:03:01+00:00">

EOF;


        $this->assertEquals($expected, $markup->toHTML());

    }


    public function testMarkupDealer()
    {

        $markup = new Object();

        $markup ->setTitle('Rolex 1956')
            ->setDescription('A fine watch in mint condition.')
            ->setURL('http://test.com/lot/1234')
            ->setImage('http://test.com/lot/1234.jpg')
            ->setCategory('watches')
            ->setSold(false)
            ->setPrice(new Price(150, null, 'EUR'));

        $expected = <<<EOF
<meta property="barnebys:title" content="Rolex 1956">
<meta property="barnebys:description" content="A fine watch in mint condition.">
<meta property="barnebys:url" content="http://test.com/lot/1234">
<meta property="barnebys:image" content="http://test.com/lot/1234.jpg">
<meta property="barnebys:category" content="watches">
<meta property="barnebys:price:amount" content="150">
<meta property="barnebys:sold" content="0">

EOF;


        $this->assertEquals($expected, $markup->toHTML());

    }

}