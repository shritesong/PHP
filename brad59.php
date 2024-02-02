<?php
    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=db2","root","");

    $sql='SELECT * FROM gift';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    foreach($result as $row){
        echo "{$row->name}<br>";
    }                                                                                                                                                              
?>