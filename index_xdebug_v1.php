<?php

session_start();

$_SESSION['names']= 'Felipe´s skills';

define('SKILL', 'Java, Kotlin and PHP');

$names = ['Felipe', 'Developer'];

class Person
{
    private string  $skill;
    public function setName(string $name)
    {
        $this->skill = $name;
    }
    public function getName()
    {
        return $this->skill;
    }
}

if (count($names) > 2){
    var_dump('count more than 2');
}

$person = new Person;
$person->setName('PHP Xdebuger');

var_dump($names);
var_dump($person->getName());
?>