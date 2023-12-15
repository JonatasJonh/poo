<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador {
    //atributos
    private $Volume;
    private $ligado;
    private $tocando;

    //metodos Especiais
    function __construct()
    {
        $this->Volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    function getVolume() {
        return $this->Volume;
    }
    function getLigado() {
        return $this->ligado;
    }
    function getTocando() {
        return $this->tocando;
    }
    function setVolume($Volume) {
        $this->Volume = $Volume;
    }
    function setligado($ligado) {
        $this->ligado = $ligado;
    }
    function setTocando($tocando) {
        $this->tocando = $tocando;
    }
    public function ligar() {
        $this->setligado(true);

    }
    public function desligar() {
        $this->setligado(false);
    }
    public function abrirMenu() {
       echo "<p>    Menu      </p>";
       echo "<br>Esta ligado?: " . ($this->getLigado()?"Sim":"Não");
       echo "<br>Esta Tocando?: " . ($this->getTocando()? "Sim":"Não");
       echo "<br>Volume: " . $this->getVolume();
       for($i=0; $i <= $this->getVolume(); $i+=10) {
        echo "|";
       } 
    }
    public function fecharMenu() {
        echo "<br>Fechando Menu.";

    }
    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        }
    }
    public function menosVolume() {
        if ($this->getLigado()) {
            $this->setligado($this->getVolume() - 5);
        }
    }
    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume()>0);

    }
    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume()==0) {
            $this->setVolume(50);
        }
    }
    public function play() {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }
    public function pause() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
}
?>