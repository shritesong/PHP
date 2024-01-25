<?php
    $year= rand(0,2400);
    echo $year . '<hr>';
    if(($year % 4 == 0 && $year % 100 != 0) || ($year % 400 ==0))
    {
        echo '是閏年';
    }
    else if(($year % 4 !== 0)||($year % 100 == 0)||($year % 400 ==0 )){
        echo '不是閏年';
    }

?>