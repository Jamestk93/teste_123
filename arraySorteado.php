<?php

$array = [9,9,1,20];

$array = array_count_values($array);

foreach ($array as $key => $value) {    
    if ($value == 1) {
        // echo "$key nao repete ";
        $nao_repete[] = $key;
    }
    
}

echo "Esses números nao repetem: ".implode(", ",$nao_repete);

?>