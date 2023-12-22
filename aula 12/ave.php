<?php
require_once 'animal.php';
class ave extends animal {
    private $corPena;


    public function corPena() {
        $this->corPena("azul");
    }
    public function fazerNinho() {
        echo "<p>Construindo um Ninho.</p>";

    }
    public function locoMover()
    {
        echo "<p>A ave esta Voando.</p>";
    }

    public function alimentar()
    {
        echo "<p>A ave esta comendo frutos.</p>";
    }

    public function emitirSom()
    {
        echo "<p>A ave assubiou.</p>";
    }

    public function getCorpena() {
        return $this->corPena;

    }

    public function setCorPena($corPena) {
        $this->corPena = $corPena;

    }
}

?>