<?php
/**
 * クラス内のthis
 */
class Person
{
    private $name;
    public $age;
    public static $whereToLive = 'Earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello() {
        echo 'hello, ' . $this->name;
        echo static::bye(); // static or self
        return $this;
    }

    static function bye() {
        echo 'bye, ';
    }
}

$bob = new Person('Bob', 18);
// $bob->hello()->bye();

Person::bye();
$bob::bye();
echo Person::$whereToLive;

// $tim = new Person('Tim', 32);
// $tim->hello();