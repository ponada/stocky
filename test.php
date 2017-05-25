<?php
    /*
    header('Content-Type: text/html; charset=UTF-8');
    echo '<pre>';
    $ft = fopen("admin/bd/data.csv", "r");
    while(!feof($ft)) {
        $buffer = fgets($ft);
        echo $buffer;
    }
    echo '</pre>';
    fclose($ft);
    */

    $json = file_get_contents("admin/api/api.json", "r");
    $obj = json_decode($json);
    print $obj->{'categories'}->{'1'};
    print $obj->{'categories'}->{'2'};
    print $obj->{'categories'}->{'3'};
    print $obj->{'categories'}->{'4'};
    print $obj->{'categories'}->{'5'};


?>