<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13</title>
</head>
<body>
    <?php include('funcoes.php');  ?>
    <h1> Exercicio 13 </h1>
    <br>
    <h1> Leia o código de um produto (1 a 5) </h1>
    <br>
    <form method="POST"> 
        <label> Digite um Código: </label>
        <input type="number" name = "num" id = "num" />
        <br>
        <button type = "submit" > Verificar
            <?php
                $num = $_POST['num'];
                $resultado = codigoProduto($num);
            ?>
        </button>
        <h1>
            <?php echo $resultado; ?> 
        </h1>
    <br><br>
    <button> <a href="index.php"> Voltar </a> </button>
</body>
</html>