<?php
    $arrayAlpha = array('a','b','c');
    $arrayBeta = array('d','e','f');
    $arrayMulti = array($arrayAlpha, $arrayBeta);

    echo($arrayMulti[0][2].'<br>');
    echo($arrayMulti[1][2].'<br>');

    $meuArray = array('a','b','c','d','f');


    echo '<br>';
    print_r($meuArray);
    echo(count($meuArray)."<br>");
    unset($meuArray[3]);
    echo (sizeof($meuArray)."<br>");
    print_r($meuArray);


    $meuArray2 = array('a','b','c','d','e','f','g');
    foreach($meuArray2 as $valor){
        echo($valor);
    }

    end($meuArray2);
    prev($meuArray2);
    prev($meuArray2);
    prev($meuArray2);
    next($meuArray2);

    echo('<br>'.key($meuArray2));
    echo('<br>'.current($meuArray2));
?>