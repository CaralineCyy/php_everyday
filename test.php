<?php

$A = 'Hello!';

function print_A() {
	global $A;
	$A = 'AAAAAA';
	echo $A;
}

echo $A;
echo '<br/>';
print_A();
echo '<br/>';

$num = 10;

function num_test(&$nums) {
	$nums = $nums + 10;
	//$res=20;
}

num_test($num);
echo $num;
echo '<br/>';

//echo $res;

function total_num($c = 9, $b = 5, $a) {
	echo $c . "+" . $b . "+" . $a;
}

total_num(1);
echo '<br/>';



$var = FALSE;

function value() {
	if (empty($var)) {
		echo 'null';
	} else {
		echo 'not null';
	}
}

value();
echo '<br/>';

function p() {
	return '0';
}

if (p()) {
	echo 'false';
} else {
	echo 'true';
}

echo '<br>';
$array = array('1', '1');
foreach ($array as $key => $value) {
	$value = 2;
}
print_r($array);

echo '<br/>';
$s='12345';
$s[$s[1]]=2;
echo $s;
echo '<br/>';

$array1=array(4,5);
$array2=array(2,3);
$x=$array1+$array2;
print_r($x);
echo '<br/>';


$arrar=  array_fill(-5, 3, 'hello');
for($i=0;$i<5;$i++){
	echo "$arrar[$i]"."=".$arrar[$i]."&nbsp";
}
echo '<br/>';

echo '<pre/>';
print_r($_SERVER);

//echo $_SERVER["ATH_TRANSLATED"];
echo '<pre/>';


//while (list($var, $value) = each($HTTP_GET_VARS))
//{
//echo "$var = $value n";
//}
echo $_SERVER[ 'REQUEST_URI'];
echo '<br/>';
echo $_SERVER[ 'QUERY_STRING' ];
echo '<br/>';



print_r(getdate());
echo '<br/>';
$arraydate=getdate();
echo $arraydate['year'];
echo '<br/>';


//$timestamp=  mktime();
$timestamp=  time();
echo date('Y年m月d日 H:i:s',$timestamp);
echo '<br/>';

//$arrs=date();
//print_r($arrs);
//echo '<br/>';

$arrs=  microtime();
print_r($arrs);
echo '<br/>';


echo '<pre>';
$con = mysql_connect("localhost","root","123456");
mysql_select_db('test',$con);
//$db = new Mysql($dbconfig);
$result = mysql_query('SELECT * FROM  user');
print_r($result);



echo '<pre>';
print_r(phpinfo());








