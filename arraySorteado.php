<?php

for ($i=1; $i <= 20; $i++) { 
    $arr_sorteado[] = rand(1,10);
}
print_r($arr_sorteado);

$array = array_count_values($arr_sorteado);

foreach ($array as $key => $value) {    
    if ($value == 1) {
        // echo "$key nao repete ";
        $nao_repete[] = $key;
    }
    
}

echo "Esses números nao repetem: ".implode(", ",$nao_repete);

?>