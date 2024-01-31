<?php
//登入驗證
    if(isset($_POST['account'])){
        $account = $_POST['account']; $passwd = $_POST['passwd'];
        $mysqli = new mysqli('localhost','root','','iii');
        $mysqli->set_charset('utf8');
        $sql = 'SELECT id,account,passwd,name FROM member WHERE account =?';
        $stmt = $mysqli -> prepare($sql);
        $stmt ->bind_param('s',$account);
        $stmt->execute();
        $stmt->store_result();
        if($stmt->num_rows > 0){
            $stmt->bind_result($id,$account,$hashpasswd,$name);
            $stmt->fetch();
            if(password_verify($passwd,$hashpasswd)){
                header('Location: main.php');
            }
        }
    }
?>



<h4>Login</h4>
<hr>
<form action="brad44.php" method="POST">
    Account: <input name="account"><br>
    Password: <input type="password" name="passwd"><br>
    <input type="submit" value="Login">
</form>