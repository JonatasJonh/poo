<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso Poo</title>

    </head>
    <body>
        <pre>
            <h1>pessoa</h1>       
            <?php
            require_once 'pessoa.php';
            require_once 'livro.php';

            $p[0] = new Pessoa("Mario", 23, "m");
            $p[1] = new Pessoa("Juliana", 27, "f");

            $l[0] = new Livro("php Basico", "Marcos Andrade", 250, $p[0]);
            $l[1] = new Livro("Poo Basico", "Mirele Luis", 320, $p[1]);

            $l[1]->detalhes();
        ?>
</pre>
    </body>
</html> 