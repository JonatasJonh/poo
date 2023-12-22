<?php
require_once 'aluno.php';
class bolsista extends aluno {
    private $bolsa;

    public function renovarBolsa() {
        echo "<p>Bolsa renovada</p>";

    }

    public function getBolsa() {
        return $this->bolsa;

    }

    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;

    }

}
?>