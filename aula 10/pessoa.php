<?php
class pessoa {
    private $nome;
    private $idade;
    private $sexo;

    public function fazerAniver() {

    }

    public function __construct()
    {
        
    }

    public function getNome() {
        return $this->nome;

    }

    public function getIdade() {
        return $this->idade;

    }

    public function getSexo() {
        return $this->sexo;

    }

    public function setNome($nome) {
        $this->nome = $nome;

    }

    public function setidade($idade) { 
        $this->idade = $idade;

    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
        
    }
}

?>