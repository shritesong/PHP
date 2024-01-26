<?php
    $a[] = 12;
    var_dump($a);
    $a[] = 'Brad';
    var_dump($a);
    echo '<hr />';
    $a[7] = 'ok';
    var_dump($a);
    $a[] = 1234;
    var_dump($a);
    echo '<hr>';
    $a['name']= 'Tomy';
    $a['gender'] = true;
    $a['age'] = 18;
    var_dump($a); 
?>