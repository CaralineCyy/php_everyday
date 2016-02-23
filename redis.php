<?php

//连接本地的 Redis 服务
   $redis = new Redis();
   $redis->connect('127.0.0.1', 6379);
   echo "Connection to server sucessfully";
         //查看服务是否运行
   echo "Server is running: " . $redis->ping();
   echo '<br/>';
   
   //get/set操作
   $redis->set('cyy','123');
   $retval=$redis->get('cyy');
   echo $retval;
   echo '<br/>';
   
   
   $num=$redis->dbsize();
   echo $num;
   echo '<br/>';
   
   //当前服务状态信息
   $redis_info=$redis->info();
   echo '<pre>';
   print_r($redis_info);
   echo '<br/>';
   
   print_r($redis->keys('*'));
   echo '<br/>';
   
   
   
   
   
    