<?php
    //隱碼攻擊預防
    $mysqli = new mysqli('localhost','root','','iii');
    $mysqli->set_charset('utf8');

    $account ='Brad' ;$passwd = '123456';$name = 'Brad';
    $sql1 ="INSERT INTO member (account,passwd,name)" . 
    " VALUES ('${account}','{$passwd}','${name}')";
    echo $sql1;
    if($mysqli->query($sql1)){
        echo 'OK';
    }else{
        echo 'XX';
    }
    $sql2 = 'INSERT INTO member (account,passwd,name)' . 
    'VALUES (?,?,?)';
    $stmt = $mysqli->prepare($sql2); //預載入
    $stmt->bind_param('sss',$account,$passwd,$name); //綁定參數 s= srting  
    if($stmt->execute()){
        echo 'OK2';
    }else{
        echo 'XX';
    }
?>