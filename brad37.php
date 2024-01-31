<?php
    //隱碼攻擊預防
    $mysqli = new mysqli('localhost','root','','iii');
    $mysqli->set_charset('utf8');

    $account = 'mark'; $name = 'Mark'; $id = 2;

    $sql2 = 'UPDATE member SET account=?,name=? WHERE id =?';
    $stmt = $mysqli->prepare($sql2); //預載入
    $stmt->bind_param('ssi',$account,$name,$id); //綁定參數 s= srting  
    if($stmt->execute()){
        echo 'OK3';
    }else{
        echo 'XX3';
    }
?>