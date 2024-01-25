<?php
    $start = 1; $rows = 1; $cols = 9;
    if(isset($_GET["start"])){
        $start = $_GET['start'];
        $rows = $_GET['rows'];
        $cols = $_GET['cols'];
    }
?>

<h1>Brad Big Company</h1>
<hr>
<hr>
<form>
        Start: <input type="number" name="start">
        ROWS: <input type="number" name="rows">
        Cols: <input type="number" name="cols">
        <input type="submit" value="go">
</form>
<table border ="1" width="100%">
    <?php
        define('ROWS',$rows);
        define('COLS',$cols);
        define('START',$start);
        for($n =0;$n <ROWS;$n++){
            echo '<tr>';
            for($j =START ;$j <= (START + COLS -1);$j++){
                $newj = $j  + $n *COLS;
                // echo '<td bgcolor = yellow>';
                if($j % 2 == 0)
                {
                    echo '<td bgcolor = yellow>';
                }else{
                    echo '<td bgcolor = green>';
                }
                for($i=1;$i <= 9;$i++){
                $r = $newj * $i;
                echo "{$newj} X {$i} = {$r} <br>";
            }
            echo '</td>';
        }
        echo '</tr>';
        }
        ?>
</table>