<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    setcookie('user',$_POST['user'],time()+10);
    echo 'Cookie is set';
}
else{
    if(isset($_COOKIE['user'])){
        echo 'You Logged in as ' . $_COOKIE['user'];
    }
    else{
        echo '
        <form action="" method="POST">
        <input type="text" name="user">
        <input type="submit" value="Submit">
        </form>';
    }
}

?>