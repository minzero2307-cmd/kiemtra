<?php
$n = 23;  

$la_so_nguyen_to = true;

if ($n <= 1) {
    $la_so_nguyen_to = false;
} else {
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            $la_so_nguyen_to = false;
            break;
        }
    }
}

if ($la_so_nguyen_to) {
    echo "$n là số nguyên tố";
} else {
    echo "$n không phải là số nguyên tố";
}
?>