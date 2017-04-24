<?php

namespace Barnebys\Protocol;

/**
 * Class Object
 * @package Barnebys\Protocol
 */
class Auction extends Markup {

    const SECTION = 'auction';

    public $start;

    public $end;


    public function __construct($start, $end)
    {
        $this->setStart($start)
             ->setEnd($end);
    }

    public function setStart($start)
    {
        $start = new \DateTime($start);
        $this->start = $start->format('c');

        return $this;
    }

    public function setEnd($end)
    {
        $end = new \DateTime($end);
        $this->end = $end->format('c');

        return $this;
    }


}