<?php
//自动类型转换
$foo='100pages';
$foo1=$foo+2;
$foo2=$foo+1.3;
$foo3=$foo+NULL;
$foo4=$foo+'10.05yuan';
echo $foo1;
echo '<br/>';
echo $foo2;
echo '<br/>';
echo $foo3;
echo '<br/>';
echo $foo4;
echo '<br/>';

//强制类型转换
$tes=10;  //整形
$tes1=(boolean)$tes; //布尔型
echo $tes1;
echo '<br/>';

$str='123.45abc';
$int1=  intval($str); //返回结果123
$float1=  floatval($str); //返回结果123.45
$str2=  strval(123.45);//返回结果‘123.45’；


//上面的这些都没有改变被转换的变量的类型。而下面的方法会改变本身的类型
$tess='bar222';//string类型
$tesss=true;  //boolean
settype($tess, 'integer');  //现在的$tess的值为222
settype($tesss, 'string');  //现在的$tesss的值为"1";

		
?>