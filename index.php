<?php

function getRequestIP() {
return $_SERVER['HTTP_CF_CONNECTING_IP'];
}

$ip = getRequestIP();
if (isset($ip)) {
  echo $ip;
}
?>
