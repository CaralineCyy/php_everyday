<?php
session_start();
include_once 'mysql_model.php';
$mysql_obj = new mysql_model();
//error_reporting(E_ERROR);

if(!empty($_POST['sub_btn'])){
    $res = $mysql_obj->check_user_login($_POST['uname'], $_POST['pwd']);
    if($res>0){
        $_SESSION['name'] = $_POST['uname'];
        $user_info = $mysql_obj->get_user_info($_POST['uname']);
        echo "login success, welcome ".$user_info[0]["fullname"];
    }else{
         echo "login false";
    }
}else{
    echo "param is wrong";
}
?>
<table border="1">
    <tr><td>id</td><td>fullname</td><td>userstatus</td><td>manage</td></tr>
    <?php 
        $all_user_infos = $mysql_obj->get_all_user_info();
        foreach($all_user_infos as $key=>$user_info){
            echo "<tr>";
            foreach($user_info as $field_name=>$value){
                 echo "<td>$field_name:$value</td>";
            }
            echo "<td><a href='user_add.php'>add</a></td>";
            echo "</tr>";
        }
    ?>
</table>