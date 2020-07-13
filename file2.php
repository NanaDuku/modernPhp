<?php

namespace Person;

class Worker
{
    public $name;
    public $sex;
    public $age;

    public function __construct($name,$sex,$age)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
    }
    
    Public function getName()
    {
        return $this->name;
    }

    Public function getSex()
    {
        return $this->sex;
    }

    Public function getAge()
    {
        return $this->age;
    }

}

$p1 = new Worker("daniel","male",15);
echo $p1->getName();
echo $p1->getSex();
echo $p1->getAge();