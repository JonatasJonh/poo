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
            require_once 'visitante.php';
            require_once 'aluno.php';
            require_once 'bolsista.php';

            $v1 = new visitante();
            $v1->setNome("Jackson");
            $v1->setIdade(24);
            $v1->setSexo("m");


            $al = new aluno();
            $al->setMatricula("12313");
            $al->setCurso("Fonte de Vida");
            $al->setNome("Bit");
            $al->setIdade(18);
            $al->setSexo("M");
            $al->pagarMensalidade();

            $bo = new bolsista();
            $bo->setMatricula("1211");
            $bo->setNome("Eduarda");
            $bo->setIdade(22);
            $bo->setBolsa(12.5);
            $bo->setCurso("Direito");
            $bo->setSexo("F");
            $bo->renovarBolsa();
            $bo->pagarMensalidade();


            print_r($v1);
            print_r($al);
            print_r($bo);

        ?>
</pre>
    </body>
</html> 