<?php

namespace Prototype;

class ConcreteBook extends BookPrototype
{
    public function __construct()
    {
        $this->setTitle('Another Book');
    }

    public function __clone()
    {
        echo 'Book cloned';
    }
}