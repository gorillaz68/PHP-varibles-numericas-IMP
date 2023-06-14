<?php
function escribir($X,$op){
    if($op>0 && $op<5){
         echo "\nel resultado es:".$X;
    }
    else{
        if($op != 5){
            echo "\ningrese un valor valido";
        }
    }
       
}
?>
