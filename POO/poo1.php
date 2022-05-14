<?php
class Pessoa
{
  public $nome; // atributo
  public function falar()
  { //metodo
    return "O meu nome e " . $this->nome;
  }
}

$naylson = new Pessoa();
$naylson->nome = "Naylson Costa";
echo $naylson->falar();
