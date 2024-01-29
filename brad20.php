<?php
    include('bradapis.php');

    sayHello('brad');
        //可多參數
    sayHello('Amy',2);
    sayHello();
    sayHelloV2('Tony',3);
    SayHelloV2('Kevin');
    sayHello(4);

    // sum(1,2,3,4,5);
    $v1 = sum(1,2,3,4);
    echo $v1;


    if(checkedTWId('A123445678')){
        
    }else{
        
    }
?>