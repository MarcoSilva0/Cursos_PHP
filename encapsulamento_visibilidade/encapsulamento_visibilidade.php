<?php

class Veiculo{
    //public =
    //private = 
    //protected =

    private $place;
    private $cor;
    protected $tipo='Caminhonete';
    
    public function setPlaca($parametro_placa){
        $this->placa = $parametro_placa;
    }

    public function getPlaca(){
        return $this->placa;
    }

}

class Carro extends Veiculo{
    public function exibirTipo(){
        echo $this->tipo;
    }
}

$carro = new Carro();
$carro->exibirTipo();
?>
