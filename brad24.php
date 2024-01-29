<?php
    $img = imagecreatefromjpeg('coffee.jpg');

    $blue = imagecolorallocate($img,0,0,255);
    imagettftext($img,72,30,20,200,$blue,'NotoSansTC-VariableFont_wght.ttf','超級浮水印');
    header('content-type: image/jpeg');
    imagejpeg($img);
    imagejpeg($img,'brad.jpg');
    imagedestroy($img);
?>