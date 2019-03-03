<?php

function sum($a, $b)
{
    return $a + $b;
}

function diff($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function division($a, $b)
{
    return $a / $b;
}

function mathOperation($a, $b, $operation)
{
    $result = 0;
    switch ($operation) {
        case '+':
            $result = sum($a, $b);
            break;
        case '-':
            $result = diff($a, $b);
            break;
        case '*':
            $result = multiply($a, $b);
            break;
        case '/':
            $result = division($a, $b);
            break;
    }
    
    return $result;
}

echo mathOperation(5, 8, '+') . '<br>';
echo mathOperation(5, 8, '-') . '<br>';
echo mathOperation(5, 8, '*') . '<br>';
echo mathOperation(5, 8, '/') . '<br>';