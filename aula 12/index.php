<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Poo</title>

    </head>
    <body>
        <pre>
            <h1>Animal</h1>       
            <?php
            require_once 'ave.php';
            require_once 'mamifero.php';
            require_once 'peixe.php';
            require_once 'reptil.php';

            $m = new mamifero();
            $r = new reptil();
            $p = new peixe();
            $v = new ave();

            $m->setPeso(45.5);
            $m->setIdade(15);
            $m->setMembros(2);
            $m->locoMover();


            $r->setIdade(2);
            $r->setPeso(3);
            $r->setMembros(5);
            $r->alimentar();


            $v->setIdade(6);
            $v->setPeso(3.5);
            $v->setMembros(1);
            $v->emitirSom();

 

        ?>
</pre>
    </body>
</html> 