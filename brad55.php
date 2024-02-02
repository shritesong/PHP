<?php
    include("bradapis.php");
    session_start();
    $rand = rand(1,49); //區域變數
    echo $rand;
    $_SESSION['rand'] = $rand; //將$rand值 存放到session
    $rand = 1000;

    $ary = [1,2,3,4,5];
    $_SESSION['ary'] = $ary;
    $ary[3] = 55;

    $s1 = new Student('Brad',70,45,56);
    echo "{$s1->getName()} :{$s1->sum()}:{$s1->avg()}<br>";
?>
<hr>
<a href="brad56.php">Next</a>