<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 09</title>
</head>
<body>
<?php include('funcoes.php');  ?>
    <h1> Exercicio 09 </h1>
    <br>
    <h1> Ler 10 números e calcule a média e mostre os números que tão acima da média </h1>
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
        <label> Digite um número: </label>
        <input type="number" name = "n6" id = "n6" />
        <br>
        <label> Digite um número: </label>
        <input type="number" name = "n7" id = "n7" />
        <br>
        <label> Digite um número: </label>
        <input type="number" name = "n8" id = "n8" />
        <br>
        <label> Digite um número: </label>
        <input type="number" name = "n9" id = "n9" />
        <br>
        <label> Digite um número: </label>
        <input type="number" name = "n10" id = "n10" />
        <br>
        <button type = "submit" > Verificar
            <?php
                $n1 = $_POST['n1'];
                $n2 = $_POST['n2'];
                $n3 = $_POST['n3'];
                $n4 = $_POST['n4'];
                $n5 = $_POST['n5'];
                $n6 = $_POST['n6'];
                $n7 = $_POST['n7'];
                $n8 = $_POST['n8'];
                $n9 = $_POST['n9'];
                $n10 = $_POST['n10'];
                $resultado = valoresMedia($n1,$n2,$n3,$n4,$n5,$n5,$n6,$n7,$n8,$n9,$n10);
            ?>
        </button>
    <br><br>
    <button> <a href="index.php"> Voltar </a> </button>    
</body>
</html>