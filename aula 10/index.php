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
            require_once 'aluno.php';
            require_once 'funcionario.php';
            require_once 'pessoa.php';
            require_once 'professor.php';

            $p1 = new pessoa();
            $p2 = new aluno();
            $p3 = new professor();
            $p4 = new funcionario();

            $p1->setNome("Mario");
            $p2->setNome("Marcos");
            $p3->setNome("Claudia");
            $p4->setNome("Naiana");

            $p2->setCurso("Desenvolvimento");
            $p3->setSalario(5000);
            $p4->setSetor("Estoque");

            $p3->receberAum(550);
            $p4->mudarTrabalho();
            $p2->cancelarMatr();

            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
            

        ?>
</pre>
    </body>
</html> 