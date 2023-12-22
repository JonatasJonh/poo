<?php
require_once 'pessoa.php';
class aluno extends pessoa {
    private $matricula;
    private $curso;

    public function pagarMensalidade() {
        echo "<p>Pagar mensalidade do aluno(a) <strong>$this->nome</strong></p>";
    }

    public function getMatricula() {
        return $this->matricula;

    }

    public function getCurso() {
        return $this->curso;

    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;

    }

    public function setCurso($curso) {
        $this->curso = $curso;

    }

} 

?>