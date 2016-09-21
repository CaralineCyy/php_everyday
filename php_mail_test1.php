<?php

include 'PHPMailer/class.phpmailer.php';
include 'PHPMailer/class.smtp.php';

function smtp_mail($sendto_email, $subject, $body, $extra_hdrs, $user_name) {
	$mail = new PHPMailer();
	$mail->IsSMTP();   // send via SMTP    
	$mail->Host = "smtp.qq.com";   // SMTP servers   
	$mail->Port = '465';
	$mail->SMTPAuth = true;  // turn on SMTP authentication    
	$mail->Username = "1835373375";  // SMTP username  注意：普通邮件认证不需要加 @域名    
	$mail->Password = "cyy0623"; // SMTP password    
	$mail->From = "1835373375@qq.com";//"1835373375@qq.com";   // 发件人邮箱    
	$mail->FromName = "夏天";  // 发件人    

	$mail->CharSet = "utf-8";   // 这里指定字符集！    
	$mail->Encoding = "base64";
	$mail->AddAddress($sendto_email, "username");  // 收件人邮箱和姓名    
	$mail->AddReplyTo("1835373375@qq.com", "First Last");
	//$mail->WordWrap = 50; // set word wrap 换行字数    
	//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment 附件    
	//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    
	$mail->IsHTML(true);  // send as HTML    
	// 邮件主题    
	$mail->Subject = $subject;
	// 邮件内容    
	$mail->Body = '<html><head>' .
			'<meta http-equiv="Content-Language" content="zh-cn">' .
			'<meta http-equiv="Content-Type" content="text/html; charset=GB2312"> ' .
			'</head>' .
			'<body>' .
			'I love php' .
			'</body>' .
			'</html>';
	$mail->AltBody = "text/html";
	if (!$mail->Send()) {
		echo "邮件发送有误 <p>";
		echo "邮件错误信息: " . $mail->ErrorInfo;
		exit;
	} else {
		echo "$user_name 邮件发送成功!<br />";
	}
}

// 参数说明(发送到, 邮件主题, 邮件内容, 附加信息, 用户名)    
smtp_mail("1832427179@qq.com", "欢迎使用phpmailer！", null, "yourdomain.com", "夏了夏天");



//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
//date_default_timezone_set('Etc/UTC');
//
////require '../PHPMailerAutoload.php';
//
////Create a new PHPMailer instance
//$mail = new PHPMailer();
//$mail->CharSet = 'utf-8';
////Tell PHPMailer to use SMTP
//$mail->isSMTP();
////Enable SMTP debugging
//// 0 = off (for production use)
//// 1 = client messages
//// 2 = client and server messages
//$mail->SMTPDebug = 0;
////Ask for HTML-friendly debug output
//$mail->Debugoutput = 'html';
////Set the hostname of the mail server
//$mail->SMTPSecure = 'ssl';
//$mail->Host = "smtp.qq.com";
////Set the SMTP port number - likely to be 25, 465 or 587
//$mail->Port = 465;
////Whether to use SMTP authentication
//$mail->SMTPAuth = true;
////Username to use for SMTP authentication
//$mail->Username = '1835373375@qq.com';//"819664855@qq.com";
////Password to use for SMTP authentication
//$mail->Password = 'cyy0623';//"xhc100606";
////Set who the message is to be sent from
//$mail->setFrom('1835373375@qq.com', '夏天');
////Set an alternative reply-to address
////$mail->addReplyTo('replyto@example.com', 'First Last');
////Set who the message is to be sent to
//$mail->addAddress('1832427179@qq.com', 'ho.xu');
////Set the subject line
//$mail->Subject = '你好，中国';
////Read an HTML message body from an external file, convert referenced images to embedded,
////convert HTML into a basic plain-text alternative body
//$mail->Body = "加密测试邮件";
////$mail->msgHTML(file_get_contents('string_test.php'), dirname(__FILE__));
////Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
////Attach an image file
//$mail->addAttachment('phpexcel_logo.gif');
//
////send the message, check for errors
//if (!$mail->send()) {
//    echo "Mailer Error: " . $mail->ErrorInfo;
//} else {
//    echo "Message sent!";
//}
?>


