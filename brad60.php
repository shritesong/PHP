<?php
    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=iii","root","");

    $sql = 'INSERT INTO member (account,passwd) VALUES(?,?)';
    $stmt =  $pdo->prepare($sql);
    $param = [100,hash('sha256','123')];
    $stmt->execute($papam);
    $result = $stmt->fetchObject();
    echo $result->v;
?>