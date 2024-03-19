<?php
class Animal
{
    public function __construct(public string $typeOfAnimal)
    {
        $this->typeOfAnimal = $typeOfAnimal;
    }
}
