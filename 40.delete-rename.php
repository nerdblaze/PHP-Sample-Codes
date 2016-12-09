<?php
if(@@unlink('name.txt')){
    echo 'The file has been deleted.';
}
else{
    echo 'The file cannot be deleted.';
}
//rename($oldFileName,$newFileName);
?>