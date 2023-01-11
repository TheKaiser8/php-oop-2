<?php
require_once __DIR__ . "/traits/NameItem.php";

class Category
{
    use NameItem;

    private $icon;

    public function __construct(string $_name, string $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;
    }

    public function getIcon()
    {
        return $this->icon;
    }
}
