<?php 
    //exercicio 01
    function exibaMaior ($num1,$num2){
        if ($num1 > $num2){
            return "O $num1 é o número maior";
        }else{
            return "O $num2 é o número maior";
        }
    }
    
    //exercicio 03
    function imprimirNumeros($i){
        for ($i = 1; $i <= 100; $i++){
            echo $i . "<br>";
        }
    } 
    
    //exercicio 05
    function verificarMultiplo($num){
        if ($num % 5 == 0 ){
            return "O $num é multiplo de 5";
        }else{
            return "O $num não é multiplo de 5";
        }
    }

    //exercicio 06
    function verificarTriangulo($a,$b,$c){
        if ($a == $b && $b == $c && $a == $c){
            return "O Triangulo é EQUILÁTERO";
            }else if ($a != $b && $a != $c && $b != $c){
                return "O triângulo é ESCALENO";
            }else{
                return "O triângulo é ISÓSCELES";
            }
        }

    //exercicio 08
    function idadeNegativa($n1,$n2,$n3,$n4,$n5){
        $media = ($n1+$n2+$n3+$n4+$n5)/5;
        if ($n1 && $n2 && $n3 && $n4 && $n5 < 0){
            return "Número negativo ! Sem média";
        }else{
            return "A média dos números é $media";
        }
    }

    //exercicio 09
    function valoresMedia($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10){
        $media = ($n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8+$n9+$n10)/10;
        $maior = $n1;
        echo "Os valores maiores que a média são: ";
        if($n1 > $media){
            echo $n1;
        }else if($n2 > $media){
            echo $n2;
        }else if($n3 > $media){
            echo $n3;
        }else if($n4 > $media){
            echo $n4;
        }else if($n5 > $media){ 
            echo $n5;
        }else if($n6 > $media){
            echo $n6;
        }else if($n7 > $media){
            echo $n7;
        }else if($n8 > $media){
            echo $n8;
        }else if($n9 > $media){
            echo $n9;
        }else if($n10 > $media){
            echo $n10;
        }
    } 
    //exercicio 11
    function fatorialNumero($num){
        if ($num < 0)
        return "Fatorial não definido para número negativo";
        $fatorial = 1;
        for ($i = $num; $i >= 1; $i--){
            return $fatorial;
        }
    }

    //exercicio 12
    function diaDaSemana($num){
        switch($num){
            case 1:
                return "Domingo";
                break;
            case 2:
                return "Segunda-Feira";
                break;
            case 3:
                return "Terça-Feira";
                break;
            case 4:
                return "Quarta-Feira";
                break;
            case 5:
                return "Quinta-Feira";
                break;
            case 6:
                return "Sexta-Feira";
                break;
            case 7: 
                return "Sabado";
                break;
            default:
                return "O número informado é invalido !";
                break;
        }//fim do switch
    }

    //exercicio 13
    function codigoProduto($num){
        switch($num){
            case 1:
                return "1 - Pão de Queijo R$ 10,00";
                break;
            case 2:
                return "2 - Caderno Argola R$ 15,00";
                break;
            case 3:
                return "3 - Queijo Qualho R$ 25,00";
                break;
            case 4:
                return "4 - Robux R$ 50,00";
                break;
            case 5:
                return "5 - Batata Doce R$ 5,00";
                break;
            default:
                return "O número informado é invalido !";
                break;
        }
    }

    //exercicio 15
    function somaNumeros($num){
        return ($num * ($num + 1)) / 2;{
            echo somaNumeros(10);
        }
    }

    //exercicio 18
    function horasTrabalhadas($horas,$valor){
        $calculo = (int)$valor * (int)$horas;
        if($calculo >= 40){
            $calculo1 = $calculo * 1.5;
            return "O seu salário é de $calculo1";
        }else{
            return "O seu salário é de $calculo";
        }
    }

    //exercicio 20
    function mediaNota($n1,$n2,$n3){
        $media = ($n1+$n2+$n3)/3;
        if($media >= 7){
            return "Você foi aprovado !";
        }else{
            return "Você foi reprovado";
        }
    }

    //exercicio 22
    function fibonacci($n1,$n2){
        $n1 = 0;
        $n2 = 1;

        for ($i = 0; $i < 15; $i++){
            echo  $n1 . " ";
        }
        $proximo =  $n1 + $n2;
        $n1 = $n2;
        $n2 = $proximo;
    }

    
    //exercicio 23
    function numeros($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15){ 
        echo "Os números negativos são: ";
        if($n1 < 0){
            echo $n1;
        }else if($n2 < 0){
            echo $n2;
        }else if($n3 < 0){
            echo $n3;
        }else if($n4 < 0){
            echo $n4;
        }else if($n5 < 0){ 
            echo $n5;
        }else if($n6 < 0){
            echo $n6;
        }else if($n7 < 0){
            echo $n7;
        }else if($n8 < 0){
            echo $n8;
        }else if($n9 < 0){
            echo $n9;
        }else if($n10 < 0){
            echo $n10;
        }else if($n11 < 0){
            echo $n11;
        }else if($n12 < 0){
            echo $n12;
        }else if($n13 < 0){
            echo $n13;
        }else if($n14 < 0){
            echo $n14;
        }else if($n15 < 0){
            echo $n15; 
        }
    }

    //exercicio 24
    function imc($peso,$altura){
        $calculo = $peso/($altura * $altura);
        if( $calculo < 18.5){
            return "Abaixo do peso";
        }else if( $calculo > 18.5 && $calculo < 24.9){
            return "Peso Normal";
        }else if( $calculo > 25.0 && $calculo < 29.9){
            return "Sobrepeso";
        }else if( $calculo > 30.0 && $calculo < 39.9){
            return "Obesidade";
        }else{
            return "Obesidade grave";
        }
    }

    //exercicio 25
    function multiplos($i){
        for ($j = 1; $j <= 50; $j++){
            if($j % 4 == 0){
                echo $j . "<br>";
            }
        }
    }

    //exercicio 27
    function nomes(nomes$n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10){

    }


?>