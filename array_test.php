<?php
$arr = array('1','2','s','fffff','ggggg');
var_dump($arr);exit;exit();die;die();
echo count($arr).'<br/>';
array_push($arr, "apple", "raspberry");
print_r($arr);
$arr[] = 'tesfsd';
print_r($arr).'<br/>';
foreach ($arr as $key => $value) {
    echo $key.'='.$value.'<br/>';
}
unset($arr[2]);
print_r($arr).'<br/>';
echo $arr[3].'<br/>';

$comma_separated = implode("#", $arr);
print_r($comma_separated);
echo '<br/>';
print_r(explode('#', $comma_separated));echo '<br/>';
$array = array(
);



?>