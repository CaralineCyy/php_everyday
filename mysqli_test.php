<?php

$sql1 = 'insert into `user`(`user`.user_name,`user`.pwd) VALUES(\'我\',\'000\');';
$sql2 = "insert into `user`(`user`.user_name,`user`.pwd) VALUES(\'哈哈哈\',);";
$mysqli = new mysqli('localhost','root','123456','test');
//$mysqli->set_opt(AUTOCOMMIT, 0);
$mysqli->autocommit(false);//开始事物
$mysqli->query($sql1);
$mysqli->query($sql2);
if(!$mysqli->errno){
  $mysqli->commit();
  echo 'ok';
}else{
 echo 'err';
  $mysqli->rollback();
}
