<?php
function has_space($str){
    if(preg_match('/ /',$str)){
    return true;
    }
    else{
        return false;
    }
}
$string="This is a string. We will use this string as an example.";
if(preg_match('/is/',$string)){
    echo 'Match Found';
}
else{
    echo 'No match found';
}
if(has_space($string)){
    echo '<br>There is Space';
}
else{
    echo '<br>There is no Space';
}
?>