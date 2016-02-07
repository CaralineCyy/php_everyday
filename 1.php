<?php

//    $link = mysql_connect('localhost', 'root', '123456');
//    var_dump($link);
//    mysql_select_db("test");
//    $sql = "SELECT id as userid, fullname, userstatus FROM   sometable";
//    $result = mysql_query($sql);
//   // mysql_fetch_array($result)
//    while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
//        print_r($row);
//	    $v3 = '值';
//		$v4 = &$v3;
//		unset($v4);
//		var_dump($v3, $v4);
//        error_reporting(0);
//		define($name, 'cyy', TRUE);
//	    //echo constant($name);
//		print_r(get_defined_constants());
//		$data = 24;
//		echo dechex($data);
//        $data=123;
//		var_export($data ,FALSE);
//		echo '<br/>';
//		$a = array (1, 2, array ("a", "b", "c"));
//        var_export ($a);
echo __DIR__;
echo '<br/>';
echo __FILE__;
echo '<br/>';
echo PATH_SEPARATOR;
echo '<br/>';
function cube($n)
{
    return($n * $n * $n);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
print_r($b);
echo '<br/>....................................................................';

$arr=array('aa','cdc','sdfdg','aa','cdc');
echo current($arr);
echo '<br/>';
echo next($arr);
echo '<br/>';
echo reset($arr);
echo '<br/>';
echo end($arr);
echo '<br/>';
print_r(each($arr));
echo '<br/>';
list($drink, , $power) = array('coffee', 'brown', 'caffeine');
echo $drink.'<br/>'.$power;
echo '<br/>';
print_r(array_count_values($arr));
echo '<br/>';
$arra=  range(0, 100, 1);
print_r($arra);
echo '<br/>';
$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array, 2));
print_r(array_chunk($input_array, 2, true));
echo '<br/>';
function odd($var)
{
    // returns whether the input integer is odd
    return($var & 1);
}

function even($var)
{
    // returns whether the input integer is even
    return(!($var & 1));
}

$array1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
$array2 = array(6, 7, 8, 9, 10, 11, 12);

echo "Odd :\n";
print_r(array_filter($array1, "odd"));
echo "Even:\n";
print_r(array_filter($array2, "even"));
echo '<br/>';

if(true=='0'){
	echo 'ok';
}
 else {
	echo 'false';
}
echo '<br/>';
$vars=2;
echo ($vars & 1);
echo '<br/>';

$ar1 = array("color" => array("favorite" => "red"), 5);
$ar2 = array(10, "color" => array("favorite" => "green", "blue"));
$result = array_merge_recursive($ar1, $ar2);
print_r($result);

echo '<br/>';
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";

echo '<br>';
$arrd=array('asa','bb','ff');
echo serialize($arrd);

echo '<br>';
$arrds=array('asa',22,'ff');
//echo serialize($arrds);

print_r(unserialize(serialize($arrds)));

echo '<br/>';
print_r(ini_get_all());

echo '<br/>';
$aa = '中国';
$bb = '四川';
$aa = urlencode($aa);
$bb = urlencode($bb);
$aa = $aa.'&'.$bb;
$b = explode('&', $aa);
$a = urldecode($bb[1]);
$b = urldecode($bb[0]);
echo $aa, $bb;

echo '<br/>';

$path='G:/phpweb/Everyday/';
function addFileToZip($path,$zip){
	//打开当前文件夹
	$handle=  opendir($path);
	while($file=  readdir($handle)!==FALSE){
		if($file!='.'&&$file!='..'){
			if(is_dir($path.'/'.$file)){
				addFileToZip($path.'/'.$file,$zip);
			}else{
				$zip->addFile($path.'/'.$file);
			}
		}
	}
	closedir($path);
}
$handle=  opendir($path);
print_r(readdir($handle));

?>
  