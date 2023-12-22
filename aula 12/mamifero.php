<?php
require_once 'animal.php';
class mamifero extends animal {
    private $corPele;

    public function corPele() {
        $this->corPele("Caramelo");
    }

    public function locoMover()
    {
        echo "Cachorro esta Andado.";
    }

    public function alimentar()
    {
        echo "Esta comendo.";
    }

    public function emitirSom()
    {
        echo "O cachorro Latio.";
    }

    public function getCorPele() {
        return $this->corPele;

    }
    public function setCorPele($corPele) {
        $this->corPele = $corPele;

    }
}

?>