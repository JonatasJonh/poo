<?php
class Carro {
    public $modelo;
    public $velocidade;
    public $Parado;

    public function __construct($m, $v, $p)
    {
        $this->modelo = $m;
        $this->velocidade = $v;
        $this->Parado = $p;
    }

     public function getModelo() {
        return $this->modelo;

    }

    public function setModelo($m) {
        $this->modelo = $m;
    }

    public function getVelocidade() {
        return $this->velocidade;
    }
    
    public function setVelocidade($v) {
        $this->velocidade = $v;

    }

    public function getParado() {
        return $this->Parado;
    }

    public function setParado($p) {
        $this->Parado = $p;
    }
} 

?>