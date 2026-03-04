<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 06</title>
</head>
<body>
    <?php include('funcoes.php');  ?>
    <h1> Exercicio 01 </h1>
    <br>
    <h1> Ler três valores e verificar se formam um triangulo </h1>
    <br>
    <form method="POST"> 
        <label> Digite um número: </label>
        <input type="number" name = "a" id = "a" />
        <br>
        <label> Digite um número: </label>
        <input type="number" name = "b" id = "b" />
        <br>
        <label> Digite um número: </label>
        <input type="number" name = "c" id = "c" />
        <br>
        <button type = "submit" > Verificar
            <?php
                $a = $_POST['a'];
                $b = $_POST['b'];
                $c = $_POST['c'];
                $resultado = verificarTriangulo($a,$b,$c);
            ?>
        </button>
        <h1>
            <?php echo $resultado; ?> 
        </h1>
    <br><br>
    <button> <a href="index.php"> Voltar </a> </button> 
</body>
</html>