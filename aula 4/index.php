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

            $c1 = new Carro("Dodge", "75", "esta parado");
            $c2 = new Carro("Mustang", "100", "Andando" );

            print_r($c1);
            print_r($c2);

        ?>
</pre>
    </body>
</html> 