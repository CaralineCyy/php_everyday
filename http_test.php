<?php

//php http 请求
/*
  1.file_get_content();
  2.curl()
  3.fsocket_open();
 */

$url = "https://www.baidu.com";

//echo file_get_contents($url);


function my_curl($url) {
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	$res = curl_exec($ch);
	curl_close($ch);

	return $res;
}

function do_http_request($url, $data, $usePost = true) {
	$result = false;

	if (!$usePost) {
		$url = $url . '?' . http_build_query($data);
	}

	//初始化
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

	if ($usePost) {
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	}

	$result = curl_exec($ch);
	curl_close($ch);

	return $result;
}

echo my_curl($url);
