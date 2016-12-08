<?php 
if(isset($_GET['user']) && !empty($_GET['user'])){
    $user_name = $_GET['user'];
    echo strtolower($user_name);
}

?>
   <form action="22.form.php" method="get">
    Name: <input type="text" name="user">
    <input type="submit" value="Submit">
</form>