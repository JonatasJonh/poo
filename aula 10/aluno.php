<?php
require_once 'pessoa.php';
class aluno extends pessoa {
    private $matr;
    private $curso;

    public function cancelarMatr() {
        echo "<p>Matricula sera cancelada</p>";

    }

    public function __construct()
    {
        
    }

    public function getMatr() {
        return $this->matr;

    }

    public function getCurso() {
        return $this->curso;

    }

    public function setMatr($matr) {
        $this->matr = $matr;

    }

    public function setCurso($curso) {
        $this->matr = $curso;

    }
}
?>