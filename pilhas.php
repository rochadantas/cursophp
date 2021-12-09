<?php
    $minhaPilha = array();
    array_push($minhaPilha,'a');
    array_push($minhaPilha,'b');
    echo(array_push($minhaPilha,'c')."<BR>");

    echo(array_pop($minhaPilha).'<br>');
    print_r($minhaPilha);
?>