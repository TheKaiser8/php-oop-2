<?php

trait MaterialItem
{
    protected $material;

    public function setMaterial($material)
    {
        $this->material = $material;
    }
    public function getMaterial()
    {
        return $this->material;
    }
}
