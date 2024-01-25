<?php
    $i = 0;
    for(printbrad();$i < 10;printline()){
        echo "{$i}<br/>";
        $i++;
    }

    function printbrad(){
        echo 'brad';
        printline();
    }
    function printline(){
        echo '<hr/>';
    }
?>