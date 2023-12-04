<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Poo</title>

    </head>
    <body>
        <?php
         
         require_once 'Caneta.php';
         $c1 = new carro;
         $c1->cor = "Preto metalico";
         $c1->combustivel = 75;
         $c1->semCombustivel = true;
         $c1->andado();
         $c1->parado();
         $c1->abastecendo ();

         //print_r($c1);

        ?>

    </body>
</html> 