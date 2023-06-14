<?php
function controlador($opt,$a,$b){
    $res=0;
    switch($opt){
        
        case 1:
            $res=$a+$b;
            //echo "la suma es: ".$res;
            break;
        case 2:
            $res=$a-$b;
            //echo "la resta es: ".$res;
            break;
        case 3:
            $res=$a*$b;
            //echo "la multiplicacion es:".$res;
            break;
        case 4:
            if($b==0){
                $res=0;
                echo "divizion entre zero";
                exit(0);
                
            }else{
                $res=$a/$b;
                //echo "la division es: ".$res;
                break;
            }
        case 5:
            
            exit(0);
        default:
            //print "No es una opción valida";
            break;
    }
    return $res;
}
?>
