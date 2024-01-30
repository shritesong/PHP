<?php
    $mysqli = new mysqli('localhost','root','','iii');
    $mysqli->set_charset('utf8');

    $sql = 'INSERT INTO gift(name,addr) VALUES("brad","abcsdddd")';
    $mysqli->query($sql);

?>