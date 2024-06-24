<?php
$num1 = (int)$_POST['num1'];
$num2 = (int)$_POST['num2'];
$op = (int)$_POST['op'];

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $num1 = (!empty($num1)) ? $num1 :0;
    $num2 = (!empty($num2)) ? $num2 :0;
    $op = (!empty($op)) ? $op :0;

    if($num1 == 0|| $num2 == 0 || $op==0){
        echo "La operación no se realizo debido a que algunos numeros valores no son validos, verfique nuevamente";
    }
    else{
        if ($op==1){
            $t_op = "Suma";
            function sumar ($num1,$num2){
                return $num1 + $num2;
            }
            echo "La operación solicitada es: ". $t_op . "<br>";
            echo "Su resultado es: ". sumar( $num1, $num2 );
        }
        elseif($op==2){
            $t_op = "Resta";
            function restar ($num1,$num2){
                return $num1 - $num2;
            }
            echo "La operación solicitada es: ". $t_op . "<br>";
            echo "Su resultado es: ". restar( $num1, $num2 );
        }
        elseif($op==3){
            $t_op = "Multiplicación";
            function multiplicar ($num1,$num2){
                return $num1 * $num2;
            }
            echo "La operación solicitada es: ". $t_op . "<br>";
            echo "Su resultado es: ". multiplicar( $num1, $num2 );
        }
        elseif($op==4){
            $t_op = "División";
            function dividir ($num1,$num2){
                return $num1 / $num2;
            }
            echo "La operación solicitada es: ". $t_op . "<br>";
            echo "Su resultado es: ". dividir( $num1, $num2 );
        }
    }
}