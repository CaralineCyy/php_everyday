<?php

session_start();
$_SESSION['name']='cyy';
//<?php echo SID

echo '<a  href="session_2.php?'.SID.'">session测试</a>';
?>