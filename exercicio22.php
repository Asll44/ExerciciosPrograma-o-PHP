<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 22</title>
</head>
<body>
    <?php include('funcoes.php');  ?>
    <h1> Exercicio 22 </h1>
    <br>
    <h1> 15 primeiros termos da sequência de Fibornacci </h1>
    <form method="POST"> 
        <button type = "submit" > Verificar
            <?php
                $n1= $_POST['$n1'];
                $n2 = $_POST['$n2'];
                $resultado = fibonacci($n1,$n2);
            ?>
        </button>
        <h1>
            <?php echo $resultado; ?> 
        </h1>
    <br><br>
    <button> <a href="index.php"> Voltar </a> </button>   
</body>
</html>