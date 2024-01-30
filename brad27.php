<?php
    $dir = 'dir2/dir3/dir4';
    if(!file_exists($dir)){
        mkdir($dir,0777,true);
    }

    $data = "Hello,world\n1231242\n3942384\cjkasjdk";
    $fp = fopen("{$dir}/file1.txt",'a');
    fwrite($fp,'brad');
    fflush($fp);
    fclose($fp);
?>