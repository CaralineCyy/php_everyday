<?php
//echo "Process title: " . cli_get_process_title() . "\n";
echo get_include_path();
echo "<br/>";
//获取所有加载的模块
echo "<pre>";
print_r(get_loaded_extensions());
echo "<br/>";
echo "<pre>";
print_r($_SERVER);

echo "<br/>";
// 输出类似 'Last modified: March 04 1998 20:43:59.'
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());


echo "<br/>";
echo getmygid();

echo "<br/>";
echo getmyinode();

echo "<br/>";
echo getmypid();

echo "<br/>";
echo getmyuid();

//echo "<br/>";
//echo "<pre>";
//print_r(getopt());

echo "<br/>";
echo "<pre>";
//print_r(getrusage());

echo "<br/>";
echo "<pre>";
//获取所有的配置选项
print_r(ini_get_all());

echo "<br/>";
//获取WEB服务器与PHP程序之间的借口类型
$sapi_type = php_sapi_name();
echo $sapi_type;




















