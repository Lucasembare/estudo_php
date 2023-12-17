<?php

$a = 20;
$b  = 5;
$c = 8;
$d = 4;


if ($a > $b && $d > $c ){ // true e false
    echo "Entrou no primeiro If 1 <br  >";
}

if ($a > $b && $c   > $d ){ // true e true
    echo "Entrou no primeiro If 1 <br>";
}

if (20 > 2 && 3 > 8){ // true e false
    echo "Entou no 3 If <br>";
}

if (1 > 2 && 3 > 8){ // false e false
    echo "Entou no 3 If <br>";
}

if ( $a > $d && $c > $b){ // true e true
    echo "Entrou no ultimo if <br>";
}

if ( $a >= $c && $d <= $d){
    echo "Entro no if 6 <br>";
} 

if ( $a === $b && $d > $b){
    echo "If falso";
}

if (($a >= $b && $c > $d) && $a > $c){
    echo "Comparação com mais de um AND <br>";
}


?>