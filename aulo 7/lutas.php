<?php
require_once 'lutador.php';
class luta {
    //atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    //metodos
    public function marcarLuta($l1, $l2) {
        if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
        

    }

    public function lutar() {
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch($vencedor) {
                case 0:
                    echo "<p>Empate!!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();

                    break;
                case 1:
                    echo "<p>" . $this->desafiado->getNome(). "Venceu!!";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    
                    break;
                case 2:
                    echo "<p>". $this->desafiante->getNome(). "Venceu!!";
                    $this->desafiante->ganharluta();
                    $this->desafiado->perderLuta();
                    
                    break;
            }
        } else {
            echo "<p>Luta não pode Aconteçer</p>";

        }
        
    }

    //metodos especiais
    public function getDesafiado() {
        return $this->desafiado;

    }

    public function setDesafiado($dd) {
        $this->desafiado = $dd;
    }


}
?>