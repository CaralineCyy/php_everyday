<?php
$current = "sdsfsdfgdrfgd"."\r\n";
//fopen("2.txt",'w');
file_put_contents("2.txt", $current,  FILE_APPEND | LOCK_EX);

$str = file_get_contents("2.txt");
echo $str;



public function get_all_files($dir_path) {
		//$dir_path = 'G:\\';
		//共享变量，每次都追加，而不是覆盖
		static $all_file_path = array();
		//检查这个目录变量是否为空
		if (!empty($dir_path)) {
			//列出指定路径中的文件和目录（返回的是一个array）
			$tmp_dirs = scandir($dir_path);
			//print_r($tmp_dirs);
			//循环遍历这个文件夹下的子文件
			foreach ($tmp_dirs as $tmp_dir) {
				//Array ( [0] => . [1] => .. [2] => 1.txt [3] => 222.txt [4] => 3 )因为用scandir($dir_path)返回的数组中会有这两个，所有要去除这两个
				if ($tmp_dir != '.' && $tmp_dir != '..') {
					
					$tmp_file_path = $dir_path . "/" . $tmp_dir; //echo $tmp_file_path."<br>";
					//如果这个子文件还是一个目录，则迭代查询它里面的子文件
					if (is_dir($tmp_file_path)) {
						$this->get_all_files($tmp_file_path);
					} else {
						//把获取到的文件的绝对路径给到共享变量中存起来
						$all_file_path[] = $tmp_file_path;
					}
				}
			}
			return $all_file_path;
		}
	}
