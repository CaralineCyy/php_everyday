<?php
$current = "sdsfsdfgdrfgd"."\r\n";
//fopen("2.txt",'w');
file_put_contents("2.txt", $current,  FILE_APPEND | LOCK_EX);

$str = file_get_contents("2.txt");
echo $str;
