<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Poo</title>

    </head>
    <body>
    <pre>
            <h1>EmojiUltraFight</h1>       
        <?php
        require_once 'lutador.php';
        require_once 'lutas.php';
        $l = array();

         $l [0] = new lutador("Pretty Boy", "frança", 31, 1.75, 58.9, 11, 2, 1);
         $l [0]->Status();

         $l [1] = new lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
         $l [1]->apresentar();

         $UEC01 = new luta();
         $UEC01->marcarLuta($l[0], $l[1]);
         $UEC01->lutar();


        ?>
    </pre>
    </body>
</html> 