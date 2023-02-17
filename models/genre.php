<?php
class Genre
{
    public $id;
    public $name;

    function __construct($_id, $_name)
    {
        $this->id = $_id;
        $this->name = $_name;
    }

    public function getName()
    {
        return $this->name;
    }
}
