<?php
class MyClass
{
    const constant = 'constant value';
    public static $static_val = 'bbbbbb';

    function showConstant() {
        echo  self::constant . "<br/>";
    }

    public static function test(){
    	echo 'aa'. "<br/>";
    }

    private function private_test(){
    	echo 'ccc'."<br/>";
    }
}

echo MyClass::constant . "<br/>";
echo MyClass::$static_val . "<br/>";
echo MyClass::test();


$classname = "MyClass";
echo $classname::constant . "<br/>"; // PHP 5.3.0之后
echo $classname::$static_val . "<br/>";
echo $classname::test();

$class = new MyClass();
$class->showConstant();

echo $class::constant."<br/>"; // PHP 5.3.0之后
echo $class::$static_val."<br/>";
echo $class::test();
?> 