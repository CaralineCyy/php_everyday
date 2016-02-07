<?php
class mysql_model{
    
    public $host_name = "localhost";
    public $user_name = "root";
    public $pwd = "123456";
    public $db_name ="test";
    public $table_name = "sometable";
    public $link_res = "";
    
    function __construct() {
        $this->link_res = mysql_connect($this->host_name, $this->user_name, $this->pwd);
        mysql_select_db($this->db_name, $this->link_res);
    }
  

    function get_user_info($user_name){
        $sql = "select * from sometable where fullname ='$user_name'";
        $res = mysql_query($sql, $this->link_res);

        $user_info = array();
        while ($row = mysql_fetch_array($res)) {
            $user_info[] = $row;
        }

        return $user_info;
    }


    function check_user_login($user_name, $pwd){
        $sql = "select * from sometable where fullname ='$user_name' and userstatus='$pwd' ";
        $res = mysql_query($sql, $this->link_res);
        $num_rows = mysql_num_rows($res);
        return $num_rows;
    }

    function get_all_user_info(){
        $sql = "select * from sometable";
        $user_infos = array();
        $res = mysql_query($sql, $this->link_res);
        while ($row = mysql_fetch_array($res, MYSQL_ASSOC)) {
            $user_infos[] = $row;
        }

        return $user_infos;
    }

    function insert_user_info($data){

    }

    function update_user_info_by_id($id, $data){

    }

    function del_user_info_by_id($id){

    }

}

