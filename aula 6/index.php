<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Poo</title>

    </head>
    <body>
        <pre>
            <h1>ControleRemoto</h1>       
            <?php
            require_once 'ControleRemoto.php';
            $c = new controleRemoto();
            $c->ligar();
            $c->maisVolume();
            $c->abrirMenu();


        ?>
</pre>
    </body>
</html> 