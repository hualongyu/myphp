<?php
$md5 = "2ba3daaf52719d0a7a6f58a787b727b0";
$uid = "hhp-ImZRY";
$token = strtolower(md5('1878399009'));
$url = "http://www.ttmd5.com/do.php?c=Api&m=crack&uid=$uid&token=$token&cipher=$md5";
$data = file_get_contents($url);
echo $data;
echo $token;
?>
