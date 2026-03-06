<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('funcoes.php');  ?>
    <h1> Exercicio 15 </h1>
    <br>
    <h1> Digite o número de horas trabalhadas e o valor da hora </h1>
    <br>
    <form method="POST"> 
        <label> Digite o valor da hora: </label>
        <input type="number" name = "valor" id = "valor" />
        <br>
        <label> Digite o números de horas trabalhadas: </label>
        <input type="number" name = "horas" id = "horas" />
        <br>
        <button type = "submit" > Verificar
            <?php
                $valor = $_POST['valor'];
                $horas = $_POST['horas'];
                $resultado = horasTrabalhadas($valor,$horas);
            ?>
        </button>
        <h1>
            <?php echo $resultado; ?> 
        </h1>
    <br><br>
    <button> <a href="index.php"> Voltar </a> </button>  
</body>
</html>