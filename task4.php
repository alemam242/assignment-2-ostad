<?php

function fibonacci(int $x)
{
    if ($x == 1 || $x == 0) {
        return $x;
    } else {
        return (fibonacci($x - 1) + fibonacci($x - 2));
    }
}

$n = 15;
for ($i = 0; $i < $n; $i++) {
    echo fibonacci($i) . " ";
}
