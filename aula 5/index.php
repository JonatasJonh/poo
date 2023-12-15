<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Poo</title>

    </head>
    <body>
        <pre>        
            <?php
            require_once 'ContaBanco.php';

            $p1 = new ContaBanco(); //mario
            $p2 = new ContaBanco(); //elena
            $p1->abrirConta("CC");
            $p1->setnumConta("1232");
            $p1->setDono("Mario");
            $p2->abrirConta("CP");
            $p2->setNumConta("4532");
            $p2->setDono("Elena");

            $p1->depositar(1200);
            $p2->depositar(15000);

            $p2->sacar(15000);
            $p1->sacar(750);



            print_r($p1);
            print_r($p2);


            
        ?>
</pre>
    </body>
</html> 