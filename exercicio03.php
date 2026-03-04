<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>
<body>
    <?php include ('funcoes.php') ?>
    <h1> Exercicio 03 </h1>
    <br>
    <h2> Imprimir números de 1 a 100 </h2>
    <form method="POST"> 
    <button type = "submit" > Verificar
            <?php
                $i = $_POST['i'];
                $resultado = imprimirNumeros($i);
            ?>
        </button>
        <h1>
            <?php echo $resultado; ?> 
        </h1>
</body>
</html>