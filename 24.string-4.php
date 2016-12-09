<?php
$offset=0;
$find='is';
$find_len=strlen($find);
$string = 'This is a book. The book is green';
while($string_pos=strpos($string,$find,$offset)){
    echo '<b>'. $find .'</b> found at ' . $string_pos . '<br>';
    $offset = $string_pos + $find_len;
}
?>