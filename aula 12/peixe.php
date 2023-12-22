<?php
require_once 'animal.php';
class peixe extends animal {
    private $corEscama;

    public function locoMover() {
        echo "<p>Nadando</p>";
    }

    public function alimentar()
    {
        echo "<p>Esta comendo...</p>";
    }

    public function emitirSom()
    {
        echo "<p>Peixe não tem som.</p>";
    }

    public function soltarBolha() {
        echo "<p>Peixe soltou uma Bolha.</p>";

    }

    public function getCorEscama() {
        return $this->corEscama;

    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

}

?>