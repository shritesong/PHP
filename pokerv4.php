<?php
    $poker = range(0,51);
    shuffle($poker);
    // foreach($poker as $k =>$v){
    //     echo "{$k}:{$v}<b/>";
    // }
?>

<?php
    $players = [[],[],[],[]];
    foreach($poker as $i => $card){
        $players[$i%4][(int)($i/4)] = $card;
    }
?>

<table border="1" width="100%">
    <?php 
        $launch = ['&spades;','<font color =red>&hearts;','<font color =red>&diams;','&clubs;'];
        $value = ['A',2,3,4,5,6,7,8,9,10,'J','Q','K'];
        foreach($players as $player){
            sort($player);
            echo'<tr>';
            foreach($player as $card){
                echo "<td>{$launch[(int)$card/13]}{$value[(int)$card%13]}</td>";
            }
            echo '</tr>';
        }
        ?>
</table>
