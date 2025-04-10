<?php
namespace App\Classes;

use App\Interfaces\AnimalInterface;

class Crocodile implements AnimalInterface
{

    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName():string
    {
       return $this->name;
    }

    public function setName(string $name):void
    {
        $this->name = $name;
    }

    public function boire():void
    {
        echo "{$this->name} s'hydrate...";
    }

    public function manger():void
    {
        echo "{$this->name} mange!";
    }
}