<?php

function get_path_files($path) {
	$files = array();
	$handle = opendir($path);
	if(!empty($path)) {
		while(false !== ($file = readdir($handle))) {
			$files['path'][] = iconv('GBK', 'UTF-8', $file);
			$files['real_path'][] = iconv('GBK', 'UTF-8', realpath($path.$file));
		}
	}
	return $files;
}

function get_data_bytes($Bytes) {
	$Type = array("B", "KB", "M", "G", "T");
	$counter = 0;
	while($Bytes >= 1024) {
		$Bytes/=1024;
		$counter++;
	}
	return round($Bytes, 2).' '.$Type[$counter];
}

function chang_size_to_bytes($size){
	$type = array("B", "KB", "M", "G", "T");
	$data_arr = explode(' ', $size);
	
	foreach($type as $key=>$bytes_val){
		if($bytes_val===$data_arr[1]){
			$num_index = $key;
			break;
		}
	}
	if(isset($num_index))
		return $data_arr[0]*pow(1024,$num_index);
	return ;
}

function get_file_info($file) {

	$file_info = array();
	$file = iconv('UTF-8', 'GBK', $file);
	$file_info['file_type'] = filetype($file);
	$file_info['size'] = get_data_bytes(filesize($file));
	$file_info['recent_open_time'] = date("Y-m-d H:i:s", fileatime($file));
	$file_info['recent_modify_time'] = date("Y-m-d H:i:s", filemtime($file));
	$file_info['is_readable'] = is_readable($file);
	$file_info['is_writable'] = is_writable($file);
	$file_info['is_executable'] = is_executable($file);
	$file_info['is_link'] = is_link($file);
	//$file_info['real_path'] = iconv('GBK', 'UTF-8', realpath($file));
	clearstatcache();
	
	return $file_info;
}

function get_environment() {
	$en_arr = array(
		'host_name' => $_SERVER['HTTP_HOST'],
		'ip' => $_SERVER['SERVER_ADDR'],
		'port' => $_SERVER['SERVER_PORT'],
		'agent' => $_SERVER['HTTP_USER_AGENT'],
		'file_path' => realpath(__FILE__),
		'os_cpu' => php_uname(),
		'doc_root' => $_SERVER['DOCUMENT_ROOT'],
		'time_zone' => ini_get('date.timezone'),
		'today' => DATE("Y-m-d H:i:s"),
		'web_server' => $_SERVER['SERVER_SOFTWARE'],
		'error_reporting' => ini_get('error_reporting'),
	);
	return $en_arr;
}

function change_info($data_arr, $chang_arr) {
	$change_to_arr = array();

	if(!empty($data_arr)) {
		foreach($data_arr as $key => $value){
			if(array_key_exists($value, $chang_arr)) {
				$change_to_arr[$key] = $chang_arr[$value];
			}else {
				$change_to_arr[$key] = $value;
			}
		}
	}
	return $change_to_arr;
}

function file_operation($op_type, $source_file, $dest_file, $addition_msg=''){
	$op_type_config = array('add_file', 'del_file', 'rename_file', 'copy', 'chmod');
	
	if(!file_exists($source_file))
		return FALSE;
	
	switch($op_type_config[$op_type]){
		case 'add_file':
			$res = touch($dest_file);
			break;
		case 'del_file':
			$res = unlink($source_file);
			break;
		case 'rename_file':
			$res = rename($source_file, $dest_file);
			break;
		case 'copy':
			$res = copy($source_file, $dest_file);
			break;
	}
	return $res;
}