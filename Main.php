<?php
include "escribir.php";
include "controlador.php";
include "menu.php";
include "entrada.php";
// Your code here!
    $opt=menu();
    $num1=entrada();
    $num2=entrada();
    $res=controlador($opt,$num1,$num2);
    escribir($res,$opt);
    
?>
