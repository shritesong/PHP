<?php
    $json = file_get_contents("https://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvAgriculturalProduce.aspx");
    $datas = json_decode($json);

    $mysqli = new mysqli('localhost','root','','iii');
    $mysqli->set_charset('utf8');
    $mysqli->query('DELETE FROM gift');
    $mysqli->query('ALTER TABLE gift AUTO_INCREMENT = 1');

    foreach($datas as $data){
        $name = $data->Name;
        $addr = $data ->SalePlace;
        $feature = $data->Feature;
        $picurl =$data ->Column1;
        $city = $data -> County;
        $town = $data ->Township;
        $lng = $data -> Longitude;
        $lat = $data ->Latitude;
        $sql = "INSERT INTO gift(name,addr,feature,picurl,city,town,lat,lng)" . 
        "VALUE ('$name','$addr','$feature','$picurl','$city','$town',   $lat,$lng)";
        $mysqli->query($sql);
    }
?>