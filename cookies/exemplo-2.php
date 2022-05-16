<?php

if (isset($_COOKIE["NOME_DO_COOKIE"])) {

    var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"]));
    
    echo "<br/>";//Coloquei esse br para quebrar a linha para visualizar melhor os dois exemplos

    $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);

    echo $obj->empresa;

}

?>