<?php
// $basepath1 = SeasLog::getBasePath();
// SeasLog::setBasePath('/Log/base_test');
// $basepath2 = SeasLog::getBasePath();

// var_dump($basepath1,$basepath2);
// echo '<br/>';

// $lastLogger_1 = SeasLog::getLastLogger();
// var_dump($lastLogger_1);


SeasLog::log(SEASLOG_ERROR,'this is a error test by ::log');
SeasLog::info('this is a info log');
//SeasLog::warning('your {website} was down,please {action} it ASAP!',array('{website}' => 'github.com','{action}' => 'rboot'));
SeasLog::error('a error log');
echo '<br/>';
$countResult_1 = SeasLog::analyzerCount();
$countResult_2 = SeasLog::analyzerCount(SEASLOG_WARNING);
$countResult_3 = SeasLog::analyzerCount(SEASLOG_ERROR,date('Ymd',time()));

//,$countResult_2,$countResult_3
print_r($countResult_1);
echo '<br/>';
print_r($countResult_2);
echo '<br/>';
print_r($countResult_3);