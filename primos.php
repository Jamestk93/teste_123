<?php 
$inicial = 0;
$final = 101;

primos($inicial, $final);

function primos($inicial, $final) 
{
    while($inicial < $final){        
        $inicial++;        
        if ($inicial == $final || $inicial == 1){
            continue;
        }
        $divisores = 0;
        for($count=2; $count<$inicial; $count++) {                    
            if($inicial % $count === 0){                
                $divisores++;
            }
        }    
      
        if(!$divisores)  
            $numeros_primos[] = $inicial;        
    }
    $qtd_primos = (count($numeros_primos));
    
    echo "Resposta: Encontrados $qtd_primos números primos, são eles: ". implode(",",$numeros_primos);
}
?>