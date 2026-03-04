<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05</title>
</head>
<body>
    <?php include('funcoes.php');  ?>
    <h1> Exercicio 05 </h1>
    <br>
    <h1> Verifique se seu número é multiplo de 5 </h1>
    <br>
    <form method="POST"> 
        <label> Digite um número: </label>
        <input type= "number" name = "num" id = "num" />
        <br>
        <button type = "submit" > Verificar
            <?php
                $num = $_POST['num'];
                $resultado = verificarMultiplo($num);
            ?>
        </button>
        <h1>
            <?php echo $resultado; ?> 
        </h1>
    <br><br>
    <button> <a href="index.php"> Voltar </a> </button> 
</body>
</html>