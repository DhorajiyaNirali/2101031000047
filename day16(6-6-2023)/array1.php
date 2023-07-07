<?php
    $a = array(1,4,5,6,24);
    print_r($a);
    $sum=0;
    foreach($a as $value){
        $sum = $sum + $value;
    }
    echo "<br>".$sum;
   
?>