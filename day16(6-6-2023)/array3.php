<?php
    $a = array(1,2,3,4,5);
    $b = array(6,7,8,9,0);
    print_r($a);
    echo "<br>";
    print_r($b);
    $merge = array_merge($a,$b);
    echo "<br>";
    print_r($merge);
?>