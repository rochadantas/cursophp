<?php
class continuar{
//esse eu estou fazendo em classe para criar o habito de fazer assim
    public function continuar_inicio(){
        //continue;
        echo "esse vai ser a parte que sera chamado depois voltara";
        $this->Repetir();
    }
    function Repetir(){
        $variavel = 0;
        echo '<br>inicio do contagem <br>';
            
        for($variavel=0; $variavel<10; $variavel++){
            echo '<br>'.$variavel;
            if($variavel == 6){
                echo"<br>esse e o programa<br>";
            }
        }
    }
    function teste(){
        $c = new continuar();
        $c->continuar_inicio();  
        
    }  
}
    

?>