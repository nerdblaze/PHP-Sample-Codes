<?php

$str=' Harmful data: <img src="images.jpg"/> <br>';
echo '<br> Without slashes: ' .$str;
echo '<br> With slashes: ' . htmlentities(addslashes($str));
$str1='<br>I am nerdBlaze<br>';
echo strtolower($str1);
echo strtoupper($str1);
?>