<?php

class Pessoa{
    private $nome;

    public function correr(){
        echo $this->nome. "Correndo<br>";

    }

    function __construct($parametro_nome){
        echo "Construtor iniciado <br>";
        $this->nome = $parametro_nome;
        echo $this->nome;   
    }

    function __destruct(){
        echo "Objeto removido<br>";
    }
}

$pessoa = new Pessoa('Marco');
$pessoa->correr();
?>