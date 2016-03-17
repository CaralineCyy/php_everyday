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

echo "<br/>";
$date = new DateTime('2000-01-01');
$date->add(new DateInterval('P10D'));
echo $date->format('Y-m-d') . "\n";//2000-01-11

echo "<br/>";
$date = DateTime::createFromFormat('j-M-Y', '15-Feb-2009');
echo $date->format('Y-m-d');

echo "<br/>";
$date = new DateTime('2016-12-12');
$date->modify('+1 day');
echo $date->format('Y-m-d');

echo "<br/>";
$date = new DateTime();
$date->setDate(2001, 2, 3);
echo $date->format('Y-m-d');


$date = new DateTime();
$date->setISODate(2008, 2);
echo "<br/>";
echo $date->format('Y-m-d') . "\n";
$date->setISODate(2008, 2, 7);
echo $date->format('Y-m-d') . "\n";

echo "<br/>";
$date = new DateTime();
echo $date->format('U = Y-m-d H:i:s') . "\n";
$date->setTimestamp(1171502725);
echo $date->format('U = Y-m-d H:i:s') . "\n";

echo "<br/>";
$date = new DateTime('2000-01-01', new DateTimeZone('Pacific/Nauru'));
echo $date->format('Y-m-d H:i:sP') . "\n";
$date->setTimezone(new DateTimeZone('Pacific/Chatham'));
echo $date->format('Y-m-d H:i:sP') . "\n";

echo "<br/>";
$date = new DateTime('2000-01-20');
$date->sub(new DateInterval('P10D'));
echo $date->format('Y-m-d') . "\n";

echo "<br/>";
//两个时间之间的时间间隔
$datetime1 = new DateTime('2009-10-11');
$datetime2 = new DateTime('2009-10-13');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%R%a days');

echo "<br/>";
$date = new DateTime('2000-01-01');
echo $date->format('Y-m-d H:i:s');

echo "<br/>";
$winter = new DateTime('2010-12-21', new DateTimeZone('America/New_York'));
$summer = new DateTime('2008-06-21', new DateTimeZone('America/New_York'));
echo $winter->getOffset() . "\n";
echo $summer->getOffset() . "\n";

echo "<br/>";
$date = new DateTime();
echo $date->getTimestamp();

echo "<br/>";
$date = new DateTime(null, new DateTimeZone('Europe/London'));
$tz = $date->getTimezone();
echo $tz->getName();

echo "<br/>";
echo "<pre>";
$tz = new DateTimeZone("Europe/Prague");
print_r($tz->getLocation());
print_r(timezone_location_get($tz));







