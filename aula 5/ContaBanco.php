<?php
class ContaBanco {
    //atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    //metodos

    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->setSaldo(50);
        } elseif ($t == "CP") {
            $this->saldo = 150;
        }

    }

    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "<p>Não foi possivel, fechar a Conta
            pois ainda esta com saldo</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Conta em Debido, impossivel o encerramento</p>";
        } else {
            $this->setStatus(false);
        }

    }

    public function depositar($v) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
        }

    }

    public function sacar($v) {
        if ($this->getStatus()) {
            if ($this->getSaldo() > $v) {
                $this->setSaldo($this->getSaldo() - $v);
            } else {
                echo "<p>Saldo insuficiente/p>";
            }
        } else {
            echo "<p>Impossivel Depositar.</p>";
        }

    }

    public function pagarMensal() {
        if ($this->gettipo() == "CC") {
            $v = 12;
        } else if ($this->gettipo() == "CP") {
            $v = 20;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Saque de R$ $v autorizado, Na conta de".$this->getDono()."</p>";
        } else {
            echo "<p>Problemas com a Conta.</p>";
        }

    }



    //metdos Especiais
    public function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(true);
        echo "<p>Conta Crianda, Parabens!</p>";
    }

     public function getNumConta() {
        return $this->numConta;

    }

    public function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }
    
    public function setTipo($tipo) {
        $this->tipo = $tipo;

    }

    public function getDono() {
        return $this->dono;
    }

    public function setDono($dono) {
        $this->dono = $dono;
    }

    public function getStatus() {
        return $this->status;

    }

    public function setStatus($status) {
        $this->status =$status;

    }

    public function getSaldo() {
        return $this->saldo;

    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;

    }


}



?>