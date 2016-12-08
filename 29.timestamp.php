<?php
$time=time();
echo 'Current time is '.date('H:i:s',$time);
echo '<br>Current time is '.date('d M Y',$time);
echo '<br>Current time with one week advance : '.date('d M Y @ H:i:s', strtotime('+1 week'));
?>
