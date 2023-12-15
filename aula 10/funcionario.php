<?php
require_once 'pessoa.php';
class funcionario extends pessoa {
    private $setor;
    private $trabalhando;


    public function mudarTrabalho() {
        $this->trabalhando = ! $this->trabalhando;

    }

    public function __construct()
    {
        
    }

    public function getSetor() {
        return $this->setor;

    }

    public function getTrabalhando() {
        return $this->trabalhando;

    }

    public function setSetor($setor) {
        $this->setor = $setor;
    }

    public function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;

    }
}

?>