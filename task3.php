<?php
$n = 10;
$old = 0;
$new = 1;
echo $old . " " . $new;
for ($i = 3; $i <= $n; $i++) {
    $_temp = $old + $new;
    if ($_temp > 100)
        break;

    $old = $new;
    $new = $_temp;
    echo " " . $_temp;
}
