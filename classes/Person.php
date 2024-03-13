<?php

namespace classes;

use classes\Human;

class Person extends Human
{
    public function getName()   {
        return $this->name;
    }
}