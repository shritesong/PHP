<?php
    // 單個| & 為二進為運算
    $a = 10; $b=3;
    if($a++ >= 10 & --$b < 3){
        echo "OK: a = {$a}; b = {$b}";
    }else{
        echo "XX: a = {$a}; b = {$b}";
    }
?>

<hr>
<?php
    $e = 10 ; $f = 3;
    // $e = $e + $f; //13
    // $f = $e - $f; //10
    // $e = $e - $f; //3

    $e = $e ^ $f; 
    $f = $e ^ $f; 
    $e = $e ^ $f;
    echo "e = {$e}; f = {$f}"
?>

