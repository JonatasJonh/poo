<?php
require_once 'animal.php';
class reptil extends animal {
    private $corEscama;

    public function corEscama() {
        $this->corEscama("Verde");
    }

    public function locoMover()
    {
        echo "<p>Rasteijando.</p>";
    }
    public function alimentar()
    {
        echo "<p>Esta se Alimentado de Insetos</p>";
    }
    public function emitirSom()
    {
        echo "<p>Fez um Barulho.</p>";
    }

    public function getCorEscama() {
        return $this->corEscama;

    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;

    }


}
?>