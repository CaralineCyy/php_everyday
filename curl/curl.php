<?php

$ch = curl_init("http://172.16.11.32:8011/api/rank/recommendedtoranklist?channelId=10001&mac=111&versionId=111&model=1&internalModel=222&typeid=23");
$fp = fopen("example_homepage.txt", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);
?> 