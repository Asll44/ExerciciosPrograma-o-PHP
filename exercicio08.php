<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 08</title>
</head>
<body>
    <?php include('funcoes.php');  ?>
    <h1> Exercicio 08 </h1>
    <br>
    <h1> Ler idade até uma idade negativa ser digitada </h1>
    <br>
    <form method="POST"> 
        <label> Digite um número: </label>
        <input type="number" name = "n1" id = "n1" />
        <br>
        <label> Digite um número: </label>
        <input type="number" name = "n2" id = "n2" />
        <br>
        <label> Digite um número: </label>
        <input type="number" name = "n3" id = "n3" />
        <br>
        <label> Digite um número: </label>
        <input type="number" name = "n4" id = "n4" />
        <br>
        <label> Digite um número: </label>
        <input type="number" name = "n5" id = "n5" />
        <br>
        <button type = "submit" > Verificar
            <?php
                $n1 = $_POST['n1'];
                $n2 = $_POST['n2'];
                $n3 = $_POST['n3'];
                $n4 = $_POST['n4'];
                $n5 = $_POST['n5'];
                $resultado = idadeNegativa($n1,$n2,$n3,$n4,$n5);
            ?>
        </button>
        <h1>
            <?php echo $resultado; ?> 
        </h1>
    <br><br>
    <button> <a href="index.php"> Voltar </a> </button>    
</body>
</html>