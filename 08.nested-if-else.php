<?php
$x=2000;
if($x%100==0){
    if($x%400==0){
        echo 'Year ' .$x. ' is a Leap year';
    }
    else{
        echo 'Year ' .$x. ' is not a Leap year';
    }
}
else{
    if($x%4==0){
        echo 'Year ' .$x. ' is a Leap year';
    }
    else{
        echo 'Year ' .$x. ' is not a Leap year';
    }
}
?>