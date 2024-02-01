<?php
//註冊
    if(!isset($_POST['account']) && !isset($_POST['passwd']) && !isset($_POST['name'])) 
    header('Location: brad42.html');
    $account =  $_POST['account'];
    $passwd =  password_hash($_POST['passwd'],PASSWORD_DEFAULT);
    $name =  $_POST['name'];

    $icon = $_FILES['icon'];
    $iconData = file_get_contents($icon['tmp_name']);
    $icontype = $icon['type'];

    $mysqli = new mysqli('localhost','root','','iii');
    $mysqli->set_charset('utf8');

    $sql ='SELECT account FROM member WHERE account = ?';
    $stmt = $mysqli-> prepare($sql);
    $stmt->bind_param('s',$account);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows()==0){
        $sql = 'INSERT INTO member (account,passwd,name,icon,icontype) VALUES (?,?,?,?,?)';
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('sssss',$account,$passwd,$name,$iconData,$icontype);

        if($stmt->execute()){
            echo 'ok';
        }else{
            echo 'XX';
        }
    }else{
        header('Location: brad42.html');
    }



?>