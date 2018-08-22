<?php

class Musician {

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name . "<br>";
    }

    final public function ballin()
    {
        return $this->name . " Hermoso!<br>";
    }

}

class Guitarist extends Musician {

    public function getName()
    {
        return "My name is " . $this->name . "<br>";
    }

}

$musician = new Musician('Jhon');
$guitarist = new Guitarist('banyo');
echo $musician->getName();
echo $musician->ballin();
echo $guitarist->getName();
echo $guitarist->ballin();