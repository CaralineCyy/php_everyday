<?php
// function index(){
//         $memcache = new Memcache;             //创建一个memcache对象
//         $memcache->connect('172.16.11.32', 11211) or die ("Could not connect"); //连接Memcached服务器
//         $memcache->set('key', 'test');        //设置一个变量到内存中，名称是key 值是test
//         $get_value = $memcache->get('key');   //从内存中取出key的值
//         echo $get_value;
//     }

// session_start();
// $_SESSION['ID'] = "OOO";

//print_r(phpinfo());

// 连接到mongodb
//    $m = new Mongo();
//    echo "Connection to database successfully";
//    // 选择一个数据库
//    $db = $m->mydb;
//    echo '<br/>';
//    echo "Database mydb selected";
//    echo '<pre>';

//    print_r($m->listDBs());

//    $doc = array(
// 	"name" => "MongoDB",
// 	"type" => "database",
// 	"count" => 1,
// 	"info" => (object)array( "x" => 203,
// 	"y" => 102),
// 	"versions" => array("0.9.7", "0.9.8", "0.9.9")
// );

//    $connection = $db->bar;
//    $connection->insert($doc);

   $mm = new Mongo();
   $conn = $mm->mydb->bar;
   $cursor = $conn->find();
   echo '<pre>';
   //print_r($cursor);exit;
   // 迭代显示文档标题
   foreach ($cursor as $document) {
      print_r($document["_id"]);
   }

   





