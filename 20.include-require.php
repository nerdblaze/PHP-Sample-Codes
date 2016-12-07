<?php
echo '<br>When Files are available<br>';
include '18.array-1.php';
require '19.array-2.php';
echo '<br>When Files are not available<br>';
include '18.array-2.php';
print_r('After include');
require '18.array-2.php';
print_r('After require');
?>