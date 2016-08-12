<?php
//Para probalo llamar http://localhost/fibonacci.php?n=3
//Calcula el Fibonacci de 3
function fibonacci($numero){
    if($numero==0 || $numero==1){
        return 1;
    }
    return fibonacci($numero-1) + fibonacci($numero-2);
}

$numerofi=$_GET['n'];
echo "El Fibonacci de ".$numerofi." es: ".fibonacci($numerofi);

?>
