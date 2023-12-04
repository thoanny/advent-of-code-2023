<?php

$input = @file_get_contents('input.txt');
$lines = explode("\n", $input);
$total = 0;

foreach ($lines as $line) {
    $numbers = [];
    $split = str_split($line);
    foreach ($split as $i) {
        if (is_numeric($i)) {
            $numbers[] = $i;
        }
    }

    $total += end($numbers);
    $total += array_shift($numbers) * 10;
}

echo "Total : $total";
