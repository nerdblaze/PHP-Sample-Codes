<?php
if(isset($_POST['roll'])){
    $rand = rand(1,6);
    echo "You rolled a dice".$rand;
}
?>
<form action="" method="post">
    <input type="submit" name="roll" value="Roll Dice">
</form>