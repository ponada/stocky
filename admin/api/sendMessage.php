<?php
require_once 'utils.php';

if (isset($_POST["name"], $_POST["message"])){
    $answer = sendMessage($_POST["name"],$_POST["message"]);
    echo json_encode(array("status"=>$answer, "message"=>"Письмо отправлено"));
}