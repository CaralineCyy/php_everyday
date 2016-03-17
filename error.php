<?php
function a_test($str)
{
    echo "\nHi: $str";
    echo "<pre>";
    //返回函数执行的回溯信息
    var_dump(debug_backtrace());
}
a_test('friend');

echo "</br>";
echo $a;
 echo "<pre>";
 //返回最后一条错误信息
print_r(error_get_last());

//把错误信息写入一个文件，如果不存在则自动创建
$str="这是条错误信息。\r\n";
//0:发送到PHP的系统日志；
//1：发送到destination指定的邮件地址
//2:
//3:发送到destination 的文件中，追加在行么
//4:直接发送到SAPI的日志处理程序中
error_log($str,3,'errors.log');



// 关闭所有PHP错误报告
//error_reporting(0);

// Report simple running errors
//error_reporting(E_ERROR | E_WARNING | E_PARSE);

// 报告 E_NOTICE也挺好 (报告未初始化的变量
// 或者捕获变量名的错误拼写)
//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// 除了 E_NOTICE，报告其他所有错误
// 这是在 php.ini 里的默认设置
//error_reporting(E_ALL ^ E_NOTICE);

// 报告所有 PHP 错误 (参见 changelog)
//error_reporting(E_ALL);

// 报告所有 PHP 错误
//error_reporting(-1);

// 和 error_reporting(E_ALL); 一样
//ini_set('error_reporting', E_ALL);

//restore_error_handler();   还原错误处理函数
//set_error_handler("函数名称");  设置错误处理函数
function unserialize_handler($errno, $errstr)
{
    echo "<br/>";
    echo $errno;
    echo "<br/>";
    echo $errstr;  
    echo "<br/>";
    echo "Invalid serialized value.\n";
}
$serialized = 'foo';
set_error_handler('unserialize_handler');
//如果是 unserialize() 导致了一个错误，接下来 会恢复原来的错误处理函数。
$original = unserialize($serialized);
restore_error_handler();


    //恢复，设置，异常处理函数
    function exception_handler_1(Exception $e){
            echo "<br/>";
            echo '[' . __FUNCTION__ . '] ' . $e->getMessage();
        }
    function exception_handler_2(Exception $e){
            echo "<br/>";
            echo '[' . __FUNCTION__ . '] ' . $e->getMessage();
        }
    set_exception_handler('exception_handler_1');
    set_exception_handler('exception_handler_2');
    restore_exception_handler();
    throw new Exception('This triggers the first exception handler...');
    
    echo "<br/>";
    if ($divisor == 0) {
    //产生一个用户级别的 error/warning/notice 信息
    trigger_error("Cannot divide by zero", E_USER_ERROR);
}

    include '1.php';
    //获取包含的数据
    $clue = inclued_get_data();
    echo "<pre>";
    print_r($clue);
    
    






