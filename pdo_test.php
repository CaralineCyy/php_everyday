<?php

$dsn = 'mysql:dbname=test;host=127.0.0.1';
$user = 'root';
$password = '123456';

//ini_set('pdo.dsn.mysqldbo', 'mysql:dbname=test;host=127.0.0.1');

try {
    $dbh = new PDO($dsn, $user, $password,array(PDO::ATTR_PERSISTENT => true));
	//$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$dbh->beginTransaction();
	//$dbh -> setAttribute(PDO::ATTR_AUTOCOMMIT,0);
//	$query='update user set pwd=\'123456\' where pwd=\'11\' ';
//	$query1="select * from userS";
	$dbh->exec('insert into `user`(`user`.user_name,`user`.pwd) VALUES(\'我\',\'000\');
');
	$dbh->exec('insert into `user`(`user`.user_name,`user`.pwd) VALUES(\'哈哈哈\',);');
	$dbh->commit();
//	$result=$dbh->query($query1);
//    $arr[]='';
//	if($result)
//		{
//		echo '一共从数据库中获取到了'.$result->rowCount().'条记录！';
//		foreach ($result as $userinfo){
//			echo $userinfo['user_name'];
//			echo $userinfo['pwd'];
//			echo '<br/>';
//		}
//		}
// else {
//			print_r($dbh->errorCode());
//			echo '<br/>';
//			print_r($dbh->errorInfo());
//		}
} catch (Exception $e) {
	$dbh->rollBack();
    echo 'Connection failed: ' . $e->getMessage();
	
}

