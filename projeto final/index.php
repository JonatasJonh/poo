<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Poo</title>

    </head>
    <body>
        <pre>
            <h1>Projeto Final</h1>       
            <?php

            require_once 'video.php';
            require_once 'acoesVideo.php';
            require_once 'pessoa.php';
            require_once 'garfanhoto.php';

            $v[0] = new video("Curso POo");
            $v[1] = new video("Curso de Html");

            $p[0] = new pessoa("jamar", 32, "m");
            $p[1] = new pessoa("Marta", 21, "F");

            $g[0] = new garfanhoto("Jennifer", 12, "F", 12312);

            print_r($v);
            print_r($p);
            print_r($g);
 

        ?>
</pre>
    </body>
</html> 