<?php
    $fp = fopen('ns1hosp.csv','r');
    while($line = fgets($fp)){
        $row = explode(',',$line);
        echo "{$row[2]}:{$row[4]}:{$row[7]}<br>";
    }

    fclose($fp);
?>