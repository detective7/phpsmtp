<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);  

// 启用详细调试输出
$mail->SMTPDebug = 3;

// 设置报错提示语言
$mail->SetLanguage('zh_cn','./language/phpmailer.lang-zh_cn.php');

// 使用SMTP
$mail->isSMTP();

// 指定SMTP服务器 可以指定多个，用,分割
$mail->Host = 'stmp.163.com';//stmp.qq.com/stmp.aliyun.com

// 使SMTP认证
$mail->SMTPAuth = true;

// SMTP 账号
$mail->Username = 'xxx@163.com';

// SMTP 密码
$mail->Password = 'xxxxxxxx';

// 加密方式 TLS或ssl 根据smtp服务器商定
$mail->SMTPSecure = 'ssl';

// TCP端口连接 根据smtp服务器商定
$mail->Port = 465;

// 设置显示字符集
$mail->CharSet = "utf-8";

// 设置发件人地址
$mail->setFrom('xxx@163.com', 'xx');

// 增加一个收件人地址(邮件目的地址).
$mail->addAddress('xxx@gmail.com', '尊敬的xx');


// 增加一个回复地址(别人回复时的地址).
$mail->addReplyTo('xxx@163.com', 'xx');

// 抄送地址
// $mail->addCC('yige@email.com');

// 密送地址
// $mail->addBCC('liangge@email.com');

// 添加附件 不能是中文
//$mail->addAttachment('./file/abc.zip');

// 设置邮件正文格式为 HTML
$mail->isHTML(true);

$mail->Subject = '邮件主题';

$mail->Body = '<h1>邮件正文</h1>';

$mail->AltBody = '纯文本正文,不支持HTML的备用显示';

//发送邮件， 并且判断是否成功
if(!$mail->send()) {
  echo '邮件发送失败';
  echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
  echo '邮件发送成功 ！';
}

?>