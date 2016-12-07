<?php
$x=50;
echo $x . ' is the value of x.';
//Functions should be declared before calling.
function displayReq(/*No Arguments*/){
    return $_SERVER['REQUEST_METHOD'];
}
//Function with arguments
function doSum($var1,$var2){
    //var1 and var2 is the local copy of the variables a and b
    $returnVar = $var1+$var2;
    return $returnVar;
}
//Function with Global variable
function setX(){
    //Reading Global variable from function without passing it is not allowed in PHP.
    echo $x;
    //To read or modify the value of a global variable we need to use a global keyword.
    global $x;
    $x=100;
    return $x;
}
echo 'The Webpage is request by ' . displayReq() . ' method.';
$a=7;
$b=9;
echo 'The sum of '. $a .' and '. $b . ' is ' . doSum($a,$b); 
echo 'New value of X is ' . setX();
?>