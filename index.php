<?php
/*
// CONDICIONALES

IF:
        if(condicion){
            instrucciones
        }else{
            otras instrucciones
        };

// OPERADORES DE COMPARACIÓN

== (Igual)
=== (Identico)
!= (Diferente)
<> (Diferente)
!== (no identico)
< (menor que)
> (mayor que)
<= (menor o igual que)
>= (mayor o igual que)

*/


// Ejemplo IF 

$color = "rojo";


if($color == "rosa"){
    echo "el color es rosa";
}else{
    echo "el color no es rosa";
};

echo "<br>";

$year = 2019;
if($year != 2019){
    echo "Es un año diferente a 2019";
}else{
    echo "Estamos a 2019";
};

echo "<br>";