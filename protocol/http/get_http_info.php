<?php

/** 
* 获取HTTP请求原文 
* @return string 
*/
function get_http_raw() { 
$raw = array(); 
 
// (1) 请求行 
$raw['row'] = $_SERVER['REQUEST_METHOD'].' '.$_SERVER['REQUEST_URI'].' '.$_SERVER['SERVER_PROTOCOL']."\r\n"; 
 
// (2) 请求Headers 
$heder = array();
foreach($_SERVER as $key => $value) { 
	if(substr($key, 0, 5) === 'HTTP_') { 
	$key = substr($key, 5); 
	$key = str_replace('_', '-', $key); 
	 
	$heder[$key] = $key.': '.$value."\r\n"; 
	} 
} 
$raw['heder'] = $heder;
 
// (3) 空行 
// $raw .= "\r\n"; 
 
// (4) 请求Body 
$raw['body'] = file_get_contents('php://input'); 
 
return $raw; 
}


$httpinfo = get_http_raw();
header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header('Pragma: no-cache');
header('Content-Type:text/html;charset=utf-8 ');
echo "<pre>";
print_r($_SERVER);
echo "<pre>";
print_r($httpinfo);
echo "<pre>";
echo 'aaaaaa';
echo "<pre>";
print_r($_ENV);
exit;
