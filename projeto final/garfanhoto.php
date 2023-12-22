<?php
class garfanhoto extends pessoa {
    private $login;
    private $totassistido;

    public function assistirMaisUm() {
        $this->totassistido ++;

    }

    public function __construct($nome, $idade, $sexo, $login)
    {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totassistido = 0;
    }

    public function getLogin() {
        return $this->login;

    }

    public function getTotassistindo() {
        return $this->totassistido;

    }

    public function setLogin($login) {
        $this->login = $login;

    }

    public function settotAssistindo($totassistido) {
        $this->totassistido = $totassistido;

    }
}

?>