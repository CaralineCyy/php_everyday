<?php
function array_merge_recursive_new() {

         $arrays = func_get_args();  //返回参数array
         //取出数组的第一个元素，即第一个arr  array_shift将第一个元素移出数组
         $base = array_shift($arrays);  

         foreach ($arrays as $array) {
             //将数字内部的指针  指向第一个单元
             reset($base); //important
             //each返回数组中当前的键／值对并将数组指针向前移动一步
             while (list($key, $value) = @each($array)) {
                 if (is_array($value) && @is_array($base[$key])) {
                     $base[$key] = array_merge_recursive_new($base[$key], $value);
                 } else {
                     $base[$key] = $value;
                 }
             }
         }

         return $base;
     }

$ar1 = array("color" => array("favorite" => "red"), 5);
$ar2 = array(10, "color" => array("favorite" => "green", "blue"));
$result = array_merge_recursive_new($ar1, $ar2);
echo "<pre>";
print_r($result)
?> 