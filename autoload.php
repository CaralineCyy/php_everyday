<?php
function __autoload($class_name) {
    require_once $class_name . '.php';
}

$obj  = new MyClass1();
echo $obj::constant;
?> 