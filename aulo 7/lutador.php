<?php
class lutador {
    //atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitoria;
    private $derrotas;
    private $empates;


 //metodos
function apresentar() {
    echo "<p>-------------------</p>";
    echo "<p>Chegou a Hora! O Lutador " . $this->getNome();
    echo "Veio diretamente de " . $this->getNacionalidade();
    echo "tem " . $this->getIdade() . "anos e pesa " . $this->getPeso() . "Kg";
    echo "<br> ele tem " . $this->getVitoria() . " Vitoria";
    echo $this->getDerrotas() . "derrotas e " . $this->getEmpates() . " empatou";

}
function Status() {
    echo "<p>---------------------</p>";
    echo "<p>" . $this->getNome() . " e um peso " . $this->getCategoria();
    echo " e ja ganhou " . $this->getVitoria() . " vezes, ";
    echo " perdeu " . $this->getDerrotas() . " vezes e ";
    echo " empatou " . $this->getEmpates() . " vezes!";

}

function ganharLuta() {
    $this->setVitoria($this->getVitoria() + 1);

}

function perderLuta() {
    $this->setDerrotas($this->getDerrotas() + 1);
    
}

function empatarluta() {
    $this->setEmpates($this->getEmpates() + 1);
    
}
//metodos Especiais
public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
{
    $this->nome = $no;
    $this->nacionalidade = $na;
    $this->idade = $id;
    $this->altura = $al;
    $this->setPeso($pe);
    $this->vitoria = $vi;
    $this->derrotas = $de;
    $this->empates = $em;
}

public function getNome() {
    return $this->nome;
}

public function getPeso() {
    return $this->peso;
}

public function getNacionalidade() {
    return $this->nacionalidade;

}

public function getIdade() {
    return $this->idade;

}

public function getAltura() {
    return $this->altura;

}

public function getCategoria() {
    return $this->categoria;

}

public function getVitoria() {
    return $this->vitoria;

}

public function getDerrotas() {
    return $this->derrotas;

}

public function getEmpates() {
    return $this->empates;

}

public function setNome($no) {

}

public function setPeso($pe) {
    $this->peso = $pe;
    $this->setCategoria();

}

public function setNacionalidade($na) {

}

public function setIdade($id) {

}

public function setAltura($al) {

}

public function setCategoria() {
    if ($this->peso < 52.2) {
        $this->categoria = "Invalido";
    } elseif ($this->peso <= 68.3) {
        $this->categoria = "Leve";
    } elseif ($this->peso <= 83.9) {
        $this->categoria = "Medio";
    } elseif ($this->peso <= 120.2) {
        $this->categoria = "Pesado";
    } else {
        $this->categoria = "Invalido";
    }

}

public function setVitoria($vi) {

}

public function setDerrotas($de) {

}

public function setEmpates($em) {

}

}
?>