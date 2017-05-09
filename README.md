[![Build Status](https://travis-ci.org/barnebys/markup-protocol.svg?branch=master)](https://travis-ci.org/barnebys/markup-protocol)

# Barnebys Markup Protocol

This library is a tool to generate [Barnebys Markup Tags](https://dev.bbys.io/) with PHP.

## Requirements 

> PHP >= 5.6

## Installation

The recommended way is to use [composer](https://www.google.se/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&cad=rja&uact=8&ved=0ahUKEwiAjrXw6dDTAhVNZlAKHb06CKwQFgg7MAE&url=https%3A%2F%2Fgetcomposer.org%2F&usg=AFQjCNH7QQE7wICZatZPhYJLbpp9LfGRww) 

```composer require "barnebys/markup-protocol```

If your project does not support composer, you can either clone the project on GitHub or download
the package from here. You will then have to manually add the library to your project.

## Examples


### Auction Item
  
Code
  
```PHP
use Barnebys\Protocol\Object;
use Barnebys\Protocol\Auction;
use Barnebys\Protocol\Price;

// Creates a new object
$object = new Object();
$object ->setTitle('Rolex 1956')
        ->setDescription('A fine watch in mint condition.')
        ->setURL('http://test.com/lot/1234')
        ->setImage('http://test.com/lot/1234.jpg')
        ->setCategory('watches')
        ->setPrice(new Price(150, 200, 'EUR'))
        ->setAuction(new Auction('2017-04-22T15:03:01.012345Z', '2017-08-01T15:03:01.012345Z'));

// Prints the meta tags
echo $object;
```

Outputs 

```HTML
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
```

### Fixed Price Item

Code

```PHP
// Creates a new object
$object = new Object();
$object ->setTitle('Rolex 1956')
        ->setDescription('A fine watch in mint condition.')
        ->setURL('http://test.com/lot/1234')
        ->setImage('http://test.com/lot/1234.jpg')
        ->setCategory('watches')
        ->setSold(false)
        ->setPrice(new Price(150, null, 'EUR'));

// Prints the meta tags
echo $object;
```

Outputs

```HTML
<meta property="barnebys:title" content="Rolex 1956">
<meta property="barnebys:description" content="A fine watch in mint condition.">
<meta property="barnebys:url" content="http://test.com/lot/1234">
<meta property="barnebys:image" content="http://test.com/lot/1234.jpg">
<meta property="barnebys:category" content="watches">
<meta property="barnebys:price:amount" content="150">
<meta property="barnebys:price:bid" content="0">
<meta property="barnebys:price:currency" content="EUR">
<meta property="barnebys:sold" content="0">

```