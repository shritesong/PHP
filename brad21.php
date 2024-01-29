<?php
    include('bradapis.php');

    if(checkTWId('A123456789')){
        echo 'ok';
    }else{
        echo 'xx';
    }
    echo '<hr />';           
    echo createTWIdByRandon() . '<br />';
    echo createTWIdByAreaCode('B') . '<br />';
    echo createTWIdByGender(false) . '<br />';    
    echo createTWIdByAreaCodeAndGender('Y',true) . '<br />';
?>