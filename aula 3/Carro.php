<?php
class Carro {
    public $modelo;
    public $cor;
    protected $combustivel;
    protected $semCombustivel;

     public function abastecendo() {
        if ($this->modelo == false) {
            echo "<p>Dodge Charlleger parado</p>";
        } else {
            echo "<p>Dodge Charlleger Andando..</p>";
        }

    }

    public function andado() {
        $this->combustivel = true;

    }

    protected function parado(){
        $this->semCombustivel = true;

    }
} 

?>