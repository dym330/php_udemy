<?php
/**
 * クラス継承
 * 
 * メソッドにfinalを使うとオーバーライドさせない
 * abstractを使うと継承先に実装を委ねることができる。
 * parent:継承元メソッドやプロパティを呼び出す。
 * self:定義時のクラスを探す
 * static:実行時のクラスを探す
 */
abstract class Person
{
    protected $name;
    public $age;
    public static $WHERE = 'Earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    abstract function hello();

    static function bye() {
        echo 'bye';
    }
}

class Japanese extends Person {
    public static $WHERE = '日本';

    function hello() {
        echo 'こんにちは'. $this->name;
        return $this;
    }

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = 30;
    }

    function jusho() {
        echo '住所は' . parent::$WHERE . 'です。';
    }
}

$taro = new Japanese('太郎', 18);
$taro->hello();
$taro->jusho();
// echo $taro->age;
// $bob->hello()->bye();

// $tim = new Person('Tim', 32);
// $tim->hello();