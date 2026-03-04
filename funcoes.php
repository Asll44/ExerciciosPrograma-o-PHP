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



?>