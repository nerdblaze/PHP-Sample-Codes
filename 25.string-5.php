<?php
$find=array('was','name','nerdBlaze');
$replace=array('am','pet','Tom');
$string = "My name is nerdBlaze and I was a programmer.";
echo substr_replace($string, "alex",12,5);
echo str_replace('nerdBlaze','Avijit',$string);
echo str_replace($find,$replace,$string);
?>