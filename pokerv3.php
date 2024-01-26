<?php
    //1.洗牌
    $poker = [4,5,6,7,8,9];
    for($i = 0;$i < 6 ;$i++){
        $last = 5-$i; //index
        $select = rand(0,5-$i); //選取交換值
        $temp = $poker[$last]; //將最後一個值存放到temp
        $poker[$last] = $poker[$select]; //將交換值放到最後一個
        $poker[$select] = $temp; //將最後一個值放入選擇的index
        echo "{$poker[$last]}";


    }
    //2.發牌

    //3.攤牌+理牌
?>