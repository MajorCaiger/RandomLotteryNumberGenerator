<?php

$options = getopt('', ['numbers::', 'range-from::', 'range-to::']);

$defaults = [
    'numbers' => 6,
    'range-from' => 1,
    'range-to' => 59
];

$options = array_merge($defaults, $options);

$howManyNumbers = $options['numbers'];

$range = range($options['range-from'], $options['range-to']);

$pickedNumbers = [];

while (count($pickedNumbers) < $howManyNumbers) {
    $pickedNumber = $range[array_rand($range)];

    if (!in_array($pickedNumber, $pickedNumbers)) {
        $pickedNumbers[] = $pickedNumber;
    }
}

echo implode("\t", $pickedNumbers) . "\n";
