<?php

namespace Barnebys\Protocol;

/**
 * Class Object
 * @package Barnebys\Protocol
 */
class Object extends  Markup {

    public $title;

    public $description;

    /**
     * @param $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

}