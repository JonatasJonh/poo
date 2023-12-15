<?php
require_once 'pessoa.php';
require_once 'publicacao.php';
class livro implements publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;


    public function detalhes() {
        echo "livro " . $this->titulo . " escrito por " . $this->autor;
        echo "<br> Paginas: ". $this->totPaginas;
        echo "<br> Sendo lido por ".$this->leitor->getNome();

    }

    public function __construct($titulo, $autor, $totPaginas, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
    }

    public function getTitulo() {
        return $this->titulo;

    }

    public function getAutor() {
        return $this->autor;

    }

    public function getTotpaginas() {
        return $this->totPaginas;

    }

    public function getPagAtual() {
        return $this->pagAtual;

    }

    public function getAberto() {
        return $this->aberto;

    }

    public function getLeitor() {
        return $this->leitor;

    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;

    }

    public function setAutor($autor) {
        $this->autor = $autor;

    }

    public function setTotpaginas($totPaginas) {
        $this->totPaginas = $totPaginas;

    }

    public function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;

    }

    public function setAberto($aberto) {
        $this->aberto = $aberto;

    }

    public function setLeitor($leitor) {
        $this->leitor = $leitor;

    }

    public function abrir() {
        $this->aberto = true;

    }

    public function fechar() {
        $this->aberto = false;

    }

    public function folhear($p) {
        if ($p>$this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }

    }

    public function avancarPag() {
        $this->pagAtual ++;

    }

    public function voltarPag() {
        $this->pagAtual --;

    }
}


?>