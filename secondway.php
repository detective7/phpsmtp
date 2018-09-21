<?php
require 'email.class.php';
$mailto='xx@gmail.com';
$mailsubject="测试邮件";
$mailbody='这里是邮件内容';
$smtpserver     = "ssl://smtp.163.com";
$smtpserverport = 465;
$smtpusermail   = "xxx@163.com";
$smtpuser       = "xx";
$smtppass       = "xxxxxxxx";
$mailsubject    = "=?UTF-8?B?" . base64_encode($mailsubject) . "?=";
$mailtype       = "HTML";
$smtp           = new smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass);
$smtp->debug    = false;
$smtp->sendmail($mailto, $smtpusermail, $mailsubject, $mailbody, $mailtype,'','','','','');
?>