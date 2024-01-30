<?php
    $filename = $_GET['filename'];
    $data = $_GET['data'];
    $fp = fopen("dir2/{$filename}",'w');
    fwrite($fp,$data);

    fflush($fp);
    fclose($fp);

    header("location: dir2/{$filename}");
?>