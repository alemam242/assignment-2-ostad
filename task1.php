<?php
function evenNumbersUsingForLoop(int $start, int $end, int $step)
{
    echo "Even numbers using for loop between (1-20):\n";
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i == $end)
            echo $i;
        else
            echo $i . ", ";
    }
    echo "\n\n";
}
function evenNumbersUsingWhileLoop(int $start, int $end, int $step)
{
    echo "Even numbers using while loop between (1-20):\n";
    while ($start <= $end) {
        if ($start == $end)
            echo $start;
        else
            echo $start . ", ";
        $start += $step;
    }
    echo "\n\n";
}
function evenNumbersUsingDoWhileLoop(int $start, int $end, int $step)
{
    echo "Even numbers using do while loop between (1-20):\n";

    do {
        if ($start == $end)
            echo $start;
        else
            echo $start . ", ";
        $start += $step;
    } while ($start <= $end);
    echo "\n\n";
}


evenNumbersUsingForLoop(2, 20, 2);
evenNumbersUsingWhileLoop(2, 20, 2);
evenNumbersUsingDoWhileLoop(2, 20, 2);
