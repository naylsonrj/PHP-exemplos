<?php

    require_once("config.php");

    use Cliente\Cadastro;

    $cad = new Cadastro();

    $cad -> setNome("Naylson");
    $cad -> setEmail("naylson@email.com");
    $cad -> setSenha("123456");

    $cad -> registrarVenda();
