<?php
   $food=array('Healthy'=>
    array('Salad','Vegetables', 'Pasta'),
   'Unhealthy'=>
    array('Pizza', 'Ice-cream'));
    foreach($food as $element => $item){
        echo '<b>' . $element . '</b><br>';
        foreach($item as $name){
            echo $name . '<br>';
        }
    }
?>