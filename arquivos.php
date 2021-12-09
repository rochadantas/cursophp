<?php
function gravar($texo){
    $meuArquivo='dados.txt';

    $file = fopen($meuArquivo,'a');
    fwrite($file,$texo);
    fclose($file);
}

function lerAruivos(){
    $filepath = 'dados.txt';
    $file = fopen($filepath,"r");
    $buffer = fread($file, filesize($filepath));
    fclose($file);
    echo($buffer);
}


gravar("meu primeiro arquivo texto, o meu nome e adonias dantas da rocha oliveira");
echo 'meu primeiro arquivos<br>';
lerAruivos();
?>