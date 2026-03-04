<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>
    <?php include('funcoes.php');  ?>
    <h1> Exercicio 01 </h1>
    <br>
    <h1> Ler dois números e exiba o maior </h1>
    <br>
    <form method="POST"> 
        <label> Digite um número: </label>
        <input type="number" name = "num1" id = "num1" />
        <br>
        <label> Digite um número: </label>
        <input type="number" name = "num2" id = "num2" />
        <br>
        <button type = "submit" > Verificar
            <?php
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $resultado = exibaMaior($num1,$num2);
            ?>
        </button>
        <h1>
            <?php echo $resultado; ?> 
        </h1>
    <br><br>
    <button> <a href="index.php"> Voltar </a> </button>    
</body>
</html>