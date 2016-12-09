<?php
$directory='./';
$dhandle=opendir($directory);
while($file = readdir($dhandle))
    if($file != '.' && $file !='..'){
        echo '<a href="' . $file .'">'.str_replace('.php','',$file).'</a><br>';
    }        
?>