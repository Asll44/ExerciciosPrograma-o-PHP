<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 23</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
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
        <label> Digite um número: </label>
        <input type="number" name = "n11" id = "n11" />
        <br>
        <label> Digite um número: </label>
        <input type="number" name = "n12" id = "n12" />
        <br>
        <label> Digite um número: </label>
        <input type="number" name = "n13" id = "n13" />
        <br>
        <label> Digite um número: </label>
        <input type="number" name = "n14" id = "n14" />
        <br>
        <label> Digite um número: </label>
        <input type="number" name = "n15" id = "n15" />
        <br>
            <?php
                $n1  = $_POST['n1'];
                $n2  = $_POST['n2'];
                $n3  = $_POST['n3'];
                $n4  = $_POST['n4'];
                $n5  = $_POST['n5'];
                $n6  = $_POST['n6'];
                $n7  = $_POST['n7'];
                $n8  = $_POST['n8'];
                $n9  = $_POST['n9'];
                $n10 = $_POST['n10'];
                $n11 = $_POST['n11'];
                $n12 = $_POST['n12'];
                $n13 = $_POST['n13'];
                $n14 = $_POST['n14'];
                $n15 = $_POST['n15'];
                $resultado = numeros($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15);
            ?>
        </button>
    </form>
    <br><br>
    <button> <a href="index.php"> Voltar </a> </button>       
</body>
</html>