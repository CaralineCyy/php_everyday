<?php
   //创建一个redis客户端
   $redis = new Redis();

   //连接到一个redis实例
   $redis->connect('127.0.0.1', 6379);
   echo "Connection to server sucessfully";

   //查看服务是否运行
   echo "Server is running: " . $redis->ping();
   echo '<br/>';
   
   //get/set操作
   $redis->set('cyy','123');
   echo '<br/>';
   
   //关闭连接
   //$redis->close();
   echo $redis->get('cyy');
   echo '<br/>';

   $key = $redis->randomKey();
   $surprise=$redis->get($key);
   echo $surprise;
   echo '<br/>';


   //数据在数据库之间的切换
   $redis->select(0);
   $redis->set('x','42');
   $redis->move('x',1);
   $redis->select(1);
   $val = $redis->get('x');
   echo $val.'<br/>';

   //数据重命名(引用)
   $redis->set('x','42');
   $redis->rename('x', 'y');
   $val1 = $redis->get('x');
   $val2 = $redis->get('y');
   echo $val1.'<br/>'.$val2.'<br/>';

   //数据重命名(复制了一份新的key-value键值对)
   $redis->set('xx','45');
   $redis->renameNx('xx','yy');
   $val3 = $redis->get('xx');
   $val4 = $redis->get('yy');
   $redis->set('xx','39');
   $val5 = $redis->get('xx');
   $val6 = $redis->get('yy');
   echo $val3.'<br/>'.$val4.'<br/>'.$val5.'<br/>'.$val6.'<br/>';


   //设置生命周期(单位秒)
   $redis->set('a','42');
   $redis->setTimeout('a', 3);
   //sleep(5);
   echo $redis->get('a').'<br/>';


   //设置生命周期(单位unix时间戳)
   $redis->set('b','des');
   $now = time(null);
   $redis->expireAt('b',$now+3);
   sleep(5);
   echo $redis->get('b').'<br/>';

   $allKeys=$redis->keys('*');
   $keyWithUserPrefix=$redis->keys('*');
   print_r($keyWithUserPrefix);
   echo '<br/>';




















   
   
   
   
   
    