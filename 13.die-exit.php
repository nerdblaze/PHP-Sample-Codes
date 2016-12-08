<?php
$x=2;
if($x==2){
    die('I am Dead.');
    echo 'Line after death';
}
else{
    exit('Server Exited');
    echo 'Line after Exit';
}
?>