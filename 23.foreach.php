<<<<<<< HEAD
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
=======
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
>>>>>>> 6fff38df7a860cfafbf93bf164960696671545c8
?>