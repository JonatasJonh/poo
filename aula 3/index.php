<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Poo</title>

    </head>
    <body>
        <pre>        
            <?php
         
         require_once 'Carro.php';
         $c1 = new carro;
         $c1->modelo = "DodgeChallerg";
         $c1->cor = "Preto metalico";

         print_r($c1);
         $c1-> abastecendo();
         $c1-> andado();

        ?>
</pre>
    </body>
</html> 