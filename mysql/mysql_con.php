<?php
	error_reporting(0);
    $link = mysql_connect('localhost', 'root', 'root');
    mysql_select_db("appstore");
    $sql = "SELECT * from application";
    $result = mysql_query($sql);
    echo "finish";
?>