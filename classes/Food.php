<?php
require_once __DIR__ . "/Product.php";

class Food extends Product
{
    private $flavour;
    private $expiration;

    public function setFlavour($flavour)
    {
        $this->flavour = $flavour;
    }
    public function getFlavour()
    {
        return $this->flavour;
    }

    public function setExpiration($date)
    {
        $this->expiration = $date;
    }
    public function getExpiration()
    {
        return $this->expiration;
    }
}
