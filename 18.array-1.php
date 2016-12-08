<?php
$food=array('Rice', 'Meat', 'Curry','cake');
print_r($food);
echo $food[0] . $food[3];
$food[4]='Pizza';
print_r($food);
$food_cost=array('Rice'=>400, 'Meat'=>500, 'Curry'=>300,'cake'=>1000);
print_r($food_cost);
echo '<br>Cost of meat is ' . $food_cost['Meat'];
?>