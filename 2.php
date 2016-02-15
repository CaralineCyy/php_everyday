<?php
//$test = 123;
//$str='aaa"bbb"';echo $str."<br>";
//$str1="'sss'$str";echo $str1."<br>";
//$str2='$test sss"$str"';echo $str2."<br>";
//echo __FILE__;echo "<br>";
//echo __DIR__;echo "<br>";
//echo __LINE__;

//$array = array('lastname', 'email', 'phone');
//$comma_separated = implode(",", $array);

//echo $comma_separated; // lastname,email,phone
//echo '<br/>';
// Empty string when using an empty array:
//var_dump(implode('hello', array())); // string(0) ""

//print_r(phpinfo());

var_dump('2222');
echo '<br/>';
var_export('222');
echo '<br/>';
var_export('2', TRUE);
echo '<br/>';
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";


?>