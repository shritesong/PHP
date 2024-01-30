<?php
    $json = file_get_contents("https://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvAgriculturalProduce.aspx");
    $data = json_decode($json);
    // echo "{$json}";

    foreach($data as $v){
        echo "{$v->Name}<br>";
    }
?>