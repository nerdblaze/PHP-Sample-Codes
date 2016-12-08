<<<<<<< HEAD
<?php
$find=array('fuck','bitch');
$replace=array('f**k','b***h');
if(isset($_POST['user_input'])&&!empty($_POST['user_input'])){
    $user_input=$_POST['user_input'];
    echo str_ireplace($find, $replace, $user_input);
}
?>
<form action="" method="post">
    <textarea name="user_input" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Submit">
=======
<?php
$find=array('fuck','bitch');
$replace=array('f**k','b***h');
if(isset($_POST['user_input'])&&!empty($_POST['user_input'])){
    $user_input=$_POST['user_input'];
    echo str_ireplace($find, $replace, $user_input);
}
?>
<form action="" method="post">
    <textarea name="user_input" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Submit">
>>>>>>> 6fff38df7a860cfafbf93bf164960696671545c8
</form>