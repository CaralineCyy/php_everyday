<?php
if(!empty($_POST)){
    echo '$_POST:';
    print_r($_POST);
}

if(!empty($_GET)){
     echo '$_GET:';
    print_r($_GET);
}

$json_data = json_encode($_POST);echo $json_data;
var_dump(json_decode($json_data, TRUE));
?>
<form id="get" method="get" >
    <input type="text" value="" name="id"/>
     <input type="text" value="" name="pwd"/> 
    <input type="submit">
</form>

<form id="get" method="post" >
    <input type="text" value="" name="id"/>
     <input type="text" value="" name="pwd"/> 
    <input type="submit">
</form>