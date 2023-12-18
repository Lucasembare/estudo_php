<?php

if ( 5 > 2 || 3 < 4){ // true e true
    echo "A operação 1 e verdadeira <br>";
} 

if (5 > 4 || "Lucas" == 23){ // true e false
    echo "A operação 2 e verdadeira <br>";
}

if (["lucas", 27] == "Lucas" || 23 > 20 ){
    echo "A operação 3 e verdadeira <br>";
}

if ("lucas" === "Pedro" || 27 < 24){
    echo "A operação 4 e verdadeira <br>";
}

$a = 10;
$b = 20;
$c = 30;
$d = 40;


if ( $a > $b || $d > $c ){
    echo "A operação 5 e verdadeira <br>";
}


if (( $a > $b || $d > $c ) && $c < $d) {
    echo "A operação 6 e verdadeira <br>";
}

if (( $a > $b && $d > $c ) || $c < $d) {
    echo "A operação 7 e verdadeira <br>";
}

?>