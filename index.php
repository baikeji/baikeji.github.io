<?php
// 获取访客信息
$ipAddress = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$visitTime = date('Y-m-d H:i:s');

// 记录访客信息
$logData = "IP Address: $ipAddress\nUser Agent: $userAgent\nVisit Time: $visitTime\n\n";
file_put_contents('visitor_log.php', $logData, FILE_APPEND);

// 跳转到指定URL
header('Location: https://arcxingye.github.io/r18/index.html');
exit;
?>
