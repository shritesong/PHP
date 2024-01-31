<?php
    $mysqli = new mysqli('localhost','root','','db2');
    $mysqli->set_charset('utf8');

    $sql = 'SELECT name gname,city country FROM gift'; //gname country別名
    $result =  $mysqli->query($sql);
    while($row = $result->fetch_object()){
        echo "{$row->gname}:{$row->country}<br/>";
    }

?>