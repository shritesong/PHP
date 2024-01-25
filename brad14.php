<?php
    $a = array(1,2,3,4,5);
    echo '<hr/>';
    $a[2] = 123;
    $a[7] = 12.3;
    $a[135] = 'brad';
    var_dump($a);
    echo '<hr/>';
    echo count($a);
    for($i = 0; $i < count($a);$i++){
        echo "{$a[$i]}<br/>";
    }
    echo '<hr/>';
    //$k index ;$v value
    foreach($a as $k => $v){
        echo "{$k} : {$v}<br/>";
    }
?>