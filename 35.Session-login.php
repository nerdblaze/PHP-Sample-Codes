<?php
    $page= '<form action="" method="post" value="">
        <input type="text" name="user" value="">
        <input type="password" name="pass">
        <input type="submit" value="Submit">
    </form>';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        session_start();
        if(isset($_SESSION['user']) && isset($_SESSION['pass'])){
            if($_SESSION['user']=='admin' && $_SESSION['pass']=='xxx'){
                echo '<h1>Welcome ' . $_SESSION['user'] ;
            }
            else{
                header('Location: http://'.$_SERVER['HTTP_HOST'.'/35.Session-login.php']);
            }
        }
        else{
            if(!empty($_POST['user']) && !empty($_POST['pass'])){
                $_SESSION['user']=$_POST['user'];
                $_SESSION['pass']=$_POST['pass'];
                if($_SESSION['user']=='admin' && $_SESSION['pass']=='xxx'){
                    echo '<h1>Welcome ' . $_SESSION['user'] ;
                }
                else{
                    header('Location: http://'.$_SERVER['HTTP_HOST'.'/35.Session-login.php']);
                }
            }
            else{
                echo $page . '<br>Please provide the proper credentials';
            }
        }
    }
else{
    echo $page;
    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['pass']);
}