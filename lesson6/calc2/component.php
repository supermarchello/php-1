<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET)) {
    $numberOne = (int)$_GET['number_one'];
    $numberTwo = (int)$_GET['number_two'];
    $operation = $_GET['operation'];
    $error     = '';
    switch ($operation) {
        case '+':
            $result = $numberOne + $numberTwo;
            break;
        case '-':
            $result = $numberOne - $numberTwo;
            break;
        case '*':
            $result = $numberOne * $numberTwo;
            break;
        case '/':
            if ($numberTwo !== 0) {
                $result = $numberOne / $numberTwo;
            } else {
                $error = 'На ноль делить нельзя';
            }
            break;
        default:
            $error = 'Неизвестная операция';
    }
}