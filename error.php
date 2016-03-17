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
error_log($str,3,'errors.log');



