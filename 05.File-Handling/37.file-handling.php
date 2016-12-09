<?php
$whandle = fopen('name.txt','w');
fwrite($whandle,"hello ");
$rhandle=fopen('name.txt','r');
echo ' <br>After Writing first time: '.fread($rhandle,filesize('name.txt'));

$whandle = fopen('name.txt','w');
fwrite($whandle,"world");
$rhandle=fopen('name.txt','r');
echo ' <br>After Writing second time:' . fread($rhandle,filesize('name.txt'));

$whandle = fopen('name.txt','w');
fwrite($whandle,"Hello ");
$rhandle=fopen('name.txt','r');
echo ' <br>After Writing third time: '. fread($rhandle,filesize('name.txt'));

$ahandle = fopen('name.txt','a');
fwrite($ahandle,"World!");
fclose($ahandle);
$readArr=file('name.txt');
echo ' <br>After Appending to the file: ';
foreach($readArr as $ra) echo $ra;
?>