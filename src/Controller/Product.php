<?php

namespace App\Controller;

class Product
{
    const FOOD_PRODUCT = 'food';
    private $name; //serve?
    private $type;
    private $price;

    public function __construct($name, $type, $price)
    {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
    }

    public function computeTVA()
    {
        if(self::FOOD_PRODUCT == $this->type){
            return $this->price * 0.055;
        }
        // On rajoute le cas ou la TVA ne peut pas être négative
        if ($this->price < 0) {
            throw new \LogicException('La TVA ne peut pas être négative.');
        }

        return $this->price *0.196;
    }
}