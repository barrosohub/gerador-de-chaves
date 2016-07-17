<?php

function generateKeys()
{
    $a = range(a, z, 1);
    $A = range(Z, A, 1);
    $n = range(0, 9000, 1);

    $x1 = rand(0, count($a));
    $x2 = rand(0, count($A));
    $x3 = rand(0, count($n));
    $x4 = rand(0, count($a));
    $x5 = rand(0, count($A));
    $x6 = rand(0, count($n));
    $x7 = rand(0, count($a));
    $x8 = rand(0, count($A));
    $x9 = rand(0, count($n));
    $x10 = rand(0, count($a));
    $x11 = rand(0, count($A));
    $x12 = rand(0, count($n));

    echo $a[$x1] . $A[$x2] . $n[$x3]
        . $a[$x4] . $a[$x7] . $n[$x6]
        . $A[$x5] . $A[$x8]. $a[$x1] . $n[$x9]
        . $a[$x10] . $n[$x12] . $A[$x11] . $a[$x10];

}

echo "<h1>Chaves geradas: </h1>";
for($z = 1; $z<=10; $z++ ) {
    echo "<b>C$z: </b>";
     $chave[$z] = generateKeys();
     echo $chave[$z] . "<br/>";
}
