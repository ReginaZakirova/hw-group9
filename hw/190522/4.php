<?php

function print2($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

# задача про крестьянина

$start_summ = $max_summ = 46.47; # сумма в кошельке изначально
while($start_summ > 0.29) {
    $prohod[] = $start_summ;
    if($start_summ > $max_summ) {
        $max_summ = $start_summ;
        $counter = $i;
    }
    $start_summ -= 0.29;
    $temp = explode(".",$start_summ);
    $start_summ = $temp[1].'.'.$temp[0];
    $i++;
}

echo "Оптимальное число проходов по мосту: " . $counter . " раза";
print2($prohod);