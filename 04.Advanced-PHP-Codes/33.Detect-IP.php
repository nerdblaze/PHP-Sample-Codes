<?php
$blockList=array('192.168.0.104','127.0.0.1');
$page='<H1>Welcome</H1>';
//Normal Way to implement IP black list
foreach($blockList as $ip){
    if($ip == $_SERVER['REMOTE_ADDR']){
        echo 'Your IP ' . $_SERVER['REMOTE_ADDR'] . ' has been blocked';
        die();
    }
}
echo $page;
//Best Way to find IP
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
    $ip=$_SERVER['HTTP_CLIENT_IP'];
}
else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}
else{
    $ip=$_SERVER['REMOTE_ADDR'];
}
echo 'The Static IP is ' . $ip;
echo '<br>The Local IP is ' . getHostByName(getHostName());
?>