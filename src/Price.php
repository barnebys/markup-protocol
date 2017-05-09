<?php

namespace Barnebys\Protocol;

/**
 * Class Object
 * @package Barnebys\Protocol
 */
class Price extends Markup {

    const SECTION = 'price';

    public $amount;

    public $bid;

    public $currency;

    private $_currencies;

    public function __construct($amount = null, $bid = null, $currency = null)
    {
        $this->_currencies = include_once __DIR__ . '/../resources/currency.php';

        $this->setAmount($amount)
             ->setBid($bid)
             ->setCurrency($currency);
    }

    public function setAmount($amount)
    {
        $this->amount = (float) $amount;

        return $this;
    }

    public function setBid($bid)
    {
        if (!is_null($bid)) {
            $this->bid = (float) $bid;
        }

        return $this;
    }

    public function setCurrency($currency)
    {
        if(is_array($this->_currencies) && key_exists($currency, $this->_currencies)) {
            $this->currency = $currency;
        }

        return $this;
    }

}