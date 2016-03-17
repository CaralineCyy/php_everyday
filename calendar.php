<?php
//返回某一个历法中  某年  某月的总天数   CAL_GREGORIAN，CAL_JULIAN，CAL_JEWISH 和CAL_FRENCH。 
$num = cal_days_in_month(CAL_GREGORIAN, 8, 2003); // 31
echo "There was $num days in August 2003";

echo "<br/>";
echo "<pre>";
//cal_from_jd ( int $jd , int $calendar )
$today = unixtojd(mktime(0, 0, 0, 8, 16, 2003));
print_r(cal_from_jd($today, CAL_GREGORIAN));

echo "<br/>";
echo "<pre>";
$info = cal_info(0);
print_r($info);

//指定年份的复活节 午夜时分的时间戳
echo "<br/>";
echo date("M-d-Y", easter_date(1999));  

echo "<br/>";
echo easter_days(2016);        

