<?php
function postcurl($url, $data)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $return = curl_exec($ch);
    curl_close($ch);
    return $return;
}

$url = "http://192.168.17.128:55152/";
$postdata['name'] = "cyy"; 
for($i=0;$i<1000;$i++){
	echo 'aa';
	postcurl($url,$postcurl);
}


?>