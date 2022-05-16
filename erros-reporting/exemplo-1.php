<?php

function error_handler($code, $message, $file, $line){

    echo json_encode(array(
        "code"=>$code,
        "message"=>$message,
        "fine"=>$file,
        "lile"=>$line
    ));

}

set_error_handler("error_handler");

$total = 100 / 0;

?>