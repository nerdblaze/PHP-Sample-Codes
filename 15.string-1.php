<?php
$str='Hello World! I am nerdBlaze';
echo 'The length of the string is ' . strlen($str);
echo '<br>The string contains' . str_word_count($str) . ' words.<br>';//<br> to create a break line
//To show the array that contains words
print_r (str_word_count($str,1));
//To show the array that contains the words along with their real positions
print_r (str_word_count($str,2));
//To add symbols that will added with the word
print_r (str_word_count($str,1,'!'));
?>