<?php
$str='I am a programmer. I have no life.';
//To shuffle the string
$shuffle_str=str_shuffle($str);
echo $shuffle_str.'<br>';
//To cut the string
echo substr($shuffle_str, 3, 8) . '<br> ';
//To revese the string
echo strrev($str);
$str1='This is a cool function';
$str2='Cool function at work';

echo '<br>The similarity between two strings are %' . similar_text($str1, $str, $result);
?>