<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 25</title>
</head>
<body>
    <?php include('funcoes.php');  ?>
    <h1> Exercicio 25 </h1>
    <br>
    <h1>  Números multiplos de 4 entre 1 e 50 </h1>
    <br>
    <form method="POST"> 
    <button type = "submit" > Verificar
            <?php
                $j = $_POST['j'];
                $resultado = multiplos($j);
            ?>
        </button>
        <h1>
            <?php echo $resultado; ?> 
        </h1>
    <br><br>
    <button> <a href="index.php"> Voltar </a> </button>  
</body>
</html>