<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 12
    </title>
</head>
<body>
    <?php include('funcoes.php');  ?>
    <h1> Exercicio 12 </h1>
    <br>
    <h1> Digite um número de 1 a 7 e mostre o dia da semana </h1>
    <br>
    <form method="POST"> 
        <label> Digite um número: </label>
        <input type="number" name = "num" id = "num" />
        <br>
        <button type = "submit" > Verificar
            <?php
                $num = $_POST['num'];
                $resultado = diaDaSemana($num);
            ?>
        </button>
        <h1>
            <?php echo $resultado; ?> 
        </h1>
    <br><br>
    <button> <a href="index.php"> Voltar </a> </button>     
</body>
</html>