<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 24</title>
</head>
<body>
    <?php include('funcoes.php');  ?>
    <h1> Exercicio 24 </h1>
    <br>
    <h2> Calcule seu imc </h2>
    <br>
    <form method="POST"> 
        <label> Digite seu peso: </label>
        <input type="number" name = "peso" id = "peso" />
        <br>
        <label> Digite sua altura: </label>
        <input type="number" name = "altura" id = "altura" />
        <br>
        <button type = "submit" > Verificar
            <?php
                $peso = $_POST['peso'];
                $altura = $_POST['altura'];
                $resultado = imc($peso,$altura);
            ?>
        </button>
        <h1>
            <?php echo $resultado; ?> 
        </h1>
    <br><br>
    <button> <a href="index.php"> Voltar </a> </button>  
</body>
</html>