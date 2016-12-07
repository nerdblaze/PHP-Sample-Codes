<?php
$n=10;
echo 'While Loop ';
$i=0;
while($i<$n){
    echo $i.'\n';
    $i++;
}
echo 'Do..While Loop\n';
$i=0;
do{
    echo $i.'\n';
    $i++;
}while($i<$n);
echo 'For Loop\n';
for($i=0; $i<$n; $i++){
    echo $i.'\n';
}
?>