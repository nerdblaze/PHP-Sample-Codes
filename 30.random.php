<<<<<<< HEAD
<?php
if(isset($_POST['roll'])){
    $rand = rand(1,6);
    echo "You rolled a dice".$rand;
}
?>
<form action="" method="post">
    <input type="submit" name="roll" value="Roll Dice">
=======
<?php
if(isset($_POST['roll'])){
    $rand = rand(1,6);
    echo "You rolled a dice".$rand;
}
?>
<form action="" method="post">
    <input type="submit" name="roll" value="Roll Dice">
>>>>>>> 6fff38df7a860cfafbf93bf164960696671545c8
</form>