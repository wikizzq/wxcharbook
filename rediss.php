<?php
$redis = new Redis();
$redis->connect('192.168.2.104',6379);
#$redis->auth('123456');
$redis->set('Jay13','www.kali.com');
echo 'Jay13:'.$redis->get('Jay13');
echo '</br>';
echo 'Jay12:'.$redis->get('Jay12');
?>
