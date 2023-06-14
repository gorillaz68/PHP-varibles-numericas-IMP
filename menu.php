<?php
    function menu(){
        
        echo "1.-Sumar\n";
        echo "2.-Restar\n";
        echo "3.-Multiplicar\n";
        echo "4.-Division\n";
        echo "5.-Salir\n";
        $op=readline();
        echo "ingrese la opcion:".$op;
        return $op;
        
    }
?>
