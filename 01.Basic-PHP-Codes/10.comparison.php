<?php
$x=5;
$y=10;
$z=10;
if($x > $y){
    echo 'X is Greater than Y';
}
else{
    echo 'X is not Greater than Y';
}
if($x < $y){
    echo 'X is Less than Y';
}
else{
    echo 'X is not Less than Y';
}
//You can mix = sign with both of the them like >= or <=

if($z==$y){
    echo 'Z is equal to Y';
}
else{
    echo 'Z is not equal to Y';
}
// ! is use to invert the result like $z!=$ will invert the result of the last if.
?>