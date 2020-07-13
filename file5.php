<?php

namespace main;
use Person;

function yourName()
{
    $name = readline("What is your name?");
    return $name;
}

function yourSex()
{
    $sex = readline("What is your sex?");
    return $sex;
}

function yourAge()
{
    $age = readline("What is your age?");
    return $age;
}

function yourCar()
{
    $carName = readline("What is the name of the car you drive?");
    return $carName;
}

function yourModel()
{
    $carModel = readline("What is the model of the car you drive?");
    return $carModel;
}

function yourTrans()
{
    $tName = readline("What is the transmission type of your car?");
    return $tName;
}

function yourSchool()
{
    $name = readline("What University did you attend?");
    return $name;
}

function yourMotorbike()
{
    $name = readline("What is the name of your motorbike?");
    return $name;
}

function yourMbrand()
{
    $name = readline("What is the brand of your motorbike?");
    return $name;
}

function yourMtrans()
{
    $name = readline("What is the transmission type of your motorbike?");
    return $name;
}



function run()
{
    $a = yourName();
    $b = yourSex();
    $c = yourAge();

    $worker = new Worker($a, $b, $c);

    echo "Your name is ". $worker->getName. "and you are" . $worker->getAge. "and a" . $worker->getSex;



}
echo "hi";
run();
echo "end";

