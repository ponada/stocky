<?php
    $json = file_get_contents("http://tut.by");
    $obj = json_decode($json);
    $userName =  $obj -> name;
    $userCity = $obj -> city;
    $userAge = $obj -> age;

    $userAge = 22;

    $obj2 = json_encode($json);

    file_put_contents("data.json", $obj2);

    echo $json;

?>