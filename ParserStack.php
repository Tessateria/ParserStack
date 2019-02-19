<?php

require_once ('StackClass.php');


if (!isset($argv[1])) {
    die('Empty String!' . PHP_EOL);
}

$inputString = $argv[1];

$checkArray = [
    '{' => '}',
    '[' => ']',
    '<' => '>',
    '(' => ')'
];

if (checkSymmetry($inputString, $checkArray)) {
    echo 'True' . PHP_EOL;
} else {
    echo 'False' . PHP_EOL;
}

function checkSymmetry($inputString, $checkArray)
{
    $inputString = str_split($inputString);
    $stack = new StackClass();

    for ($i = 0; $i < count($inputString); $i++) {
        if (in_array($inputString[$i], $checkArray)) {
            if ($stack->isEmpty()) {
                return false;
            }
            if ($checkArray[$stack->pop()] != $inputString[$i]) {
                return false;
            }
        }

        if (array_key_exists($inputString[$i], $checkArray)) {
            $stack->push($inputString[$i]);
        }
    }

    if (!$stack->isEmpty()) {
        return false;

    }

    return true;
}
