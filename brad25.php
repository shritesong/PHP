<?php
    $dir = @opendir('C:') or exit('Server Busy');
    // var_dump($dir);
    while($data = readdir($dir)){ 
        echo "{$data}<br />";
    }
    closedir($dir);
?>