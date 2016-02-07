<?php
	error_reporting(0);
    $link = mysql_connect('localhost', 'root', '123456');
    mysql_select_db("test");
    $sql = "SELECT id, name, pwd FROM test";
    $result = mysql_query($sql);
   // mysql_fetch_array($result)
    while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
        print_r($row);
    }
?>