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

    $handle = fopen("admin/bd/data.json", "r");
    for ($i = 0; $info = fgets($handle); $i++) {
        if($i == 2) {
            echo $info;
        }
    }
?>