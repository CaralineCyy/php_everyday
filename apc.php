<?php
//不可以给同一个名字多次设置数值
// $bar='abc';
// apc_add('foo', $bar);
// var_dump(apc_fetch('foo'));
// echo "\n";
// echo "</pre>";
// print_r(apc_cache_info());
// print_r(phpinfo());
// $arr['id'] = 3;
// $arr['id'] = 4;
// echo $arr['id'];
// print_r(time());
$date = "2013-05-05T00:28:36+00:00";  
echo date('Y-m-d', strtotime($date));


