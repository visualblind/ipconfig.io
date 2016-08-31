<?php
// This simple script echo's the clients public IP address through CloudFlare and AWS Elastic Load Balancer
function getRequestIP() {
return $_SERVER['HTTP_CF_CONNECTING_IP'];
}
$ip = getRequestIP();
if (isset($ip)) {
  echo $ip;
}
?>
