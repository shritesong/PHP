<?php
    //1.洗牌
    $poker = [];
    for($i = 0;$i < 52 ;$i++){
        do{
        $temp = rand(0,51);

        //檢查機制
        $isRepeat = false;
        for($j = 0; $j < $i;$j++){
            if($temp == $poker[$j]){
                //重複
                $isRepeat = true;
                break;
            }
        }
        }while($isRepeat);
            $poker[$i] = $temp;
            echo "{$poker[$i]}<br/>";

    }
    //2.發牌

    //3.攤牌+理牌
?>