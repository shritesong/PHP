<?php
    $passwd ='123456';
    $newpasswd = password_hash($passwd,PASSWORD_DEFAULT);
    var_dump($newpasswd);
    if(password_verify('123456',$newpasswd)){
        echo 'OK';
    }else{
        echo 'XX';
    }
?>