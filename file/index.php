<?php
include_once('file.inc.php');
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP_FILE_CMS</title>
	</head>

	<body>
		<table border="1">
			<caption>系统信息</caption>
			<?php $env = get_environment(); ?>
			<tr><td>主机(ip)</td><td><?php echo $env['host_name']."(".$env['ip'].")"; ?></td></tr>
			<tr><td>端口</td><td><?php echo $env['port']; ?></td></tr>
			<tr><td>客户端</td><td><?php echo $env['agent']; ?></td></tr>
			<tr><td>WEB服务器</td><td><?php echo $env['web_server'] ?></td></tr>
			<tr><td>WEB根目录</td><td><?php echo $env['doc_root']; ?></td></tr>
			<tr><td>时区设置</td><td><?php echo $env['time_zone'] ?></td></tr>
			<tr><td>文件目录</td><td><?php echo $env['file_path'] ?></td></tr>
			<tr><td>现在时间</td><td><?php echo $env['today'] ?></td></tr>
			<tr><td>错误级别</td><td><?php echo $env['error_reporting'] ?></td></tr>
		</table>
		<br>
		<form action="" method="get">
			<table border="1">
				<caption>系统文件信息
					<select name="sel_path" onchange="submit()">
						<option value="">-选择磁盘-</option>
						<option value="C:/">C:/</option>
						<option value="D:/">D:/</option>
						<option value="E:/">E:/</option>
						<option value="F:/">F:/</option>
					</select>
				</caption>
				<tr align="center"><td colspan="13"><strong>所选文件夹 : <?php echo empty($_GET['sel_path']) ? "D:/" : $_GET['sel_path'];?></strong></td></tr>
				<tr><td>文件名</td><td>类型</td><td>大小</td><td>创建时间</td><td>修改时间</td><td>可读</td><td>可写</td><td>可执行</td><td>是否链接</td><td>绝对路径</td><td colspan="3">操作</td></tr>
				<?php
					$dir_path = empty($_GET['sel_path']) ? "D:/" : $_GET['sel_path'];
					$file_paths = get_path_files($dir_path);
					$file_nums = count($file_paths['real_path']);
					$dir_free_size = disk_free_space($dir_path);
					$dir_total_size = disk_total_space($dir_path);
					$dir_used_size = 0;
					
					foreach($file_paths['real_path'] as $file){
						$file_info = get_file_info($file);
						$file_url = is_dir($file) ? $file.'\\' : '';
						echo "<tr><td><a href='?sel_path=$file_url'>".basename($file)."</a></td>";
						
						foreach($file_info as $info){
							if($info===TRUE)
								$info = '是';
							elseif($info===FALSE)
								$info = '否';
							
							echo "<td>".$info."</td>";
						}
						echo "<td>$file</td>";
						$dir_used_size += chang_size_to_bytes($file_info['size']);
						
						echo "<td><a href=''>复制文件</a></td><td><a href=''>修改文件名</a></td><td><a href=''>删除文件</a></td></tr>";
					}
					echo "<tr><td>统计信息 : </td><td>共 $file_nums</td><td>总空间：".get_data_bytes($dir_total_size)."<br>已  用：".get_data_bytes($dir_used_size)."<br>未  用：".get_data_bytes($dir_free_size)."</td></tr>";
				?>
			</table>
		</form>

	</body>
</html>