<?php

$input = @file_get_contents('input.txt');
$lines = explode("\n", $input);
$total = 0;

foreach ($lines as $line) {
    $line = str_replace(
        [
            'oneight', 'twone', 'threeight', 'fiveight', 'eightwo', 'eighthree',
            'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'
        ],
        [
            18, 21, 38, 58, 82, 83,
            1, 2, 3, 4, 5, 6, 7, 8, 9
        ],
        $line
    );

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
