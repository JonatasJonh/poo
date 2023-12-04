<?php
class Carro {
    var $modelo;
    var $cor;
    var $combustivel;
    var $semCombustivel;

    function abastecendo() {
        if ($this->modelo == true) {
            echo "<p>Dodge Charlleger parado</p>";
        } else {
            echo "<p>Dodge Charlleger Andando..</p>";
        }


    }

    function andado() {
        $this->combustivel = false;

    }

    function parado(){
        $this->semCombustivel = true;

    }
} 

?>