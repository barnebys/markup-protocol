<?php

namespace Barnebys\Protocol;

/**
 * Class Object
 * @package Barnebys\Protocol
 */
class Object extends  Markup {

    public $title;

    public $description;

    public $url;

    public $image;

    public $category;

    public $price;

    public $auction;

    public $sold;

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

    /**
     * @param $url
     * @return $this
     */
    public function setURL($url)
    {
        $this->url = $url;

        return $this;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    public function setPrice(Price $price)
    {
        $this->price = $price;

        return $this;
    }

    public function setAuction(Auction $auction)
    {
        $this->auction = $auction;

        return $this;
    }

    public function setSold($sold)
    {
        $this->sold = (bool) $sold;

        return $this;
    }
}