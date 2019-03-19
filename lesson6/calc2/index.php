<?php
require_once 'component.php';
?>
<div style="border: 1px solid #000000; padding: 20px; margin: 0 auto; width: 80%">
    <h1 style="text-align: center">Калькулятор</h1>
    <form action="index.php" method="get">
        <label>Введите первое число
            <input type="text" name="number_one" value="">
        </label>
        <lable>Введите второе число
            <input type="text" name="number_two" value="">
        </lable>
        <lable>Выберите операцию
            <input type="submit" value="+" name="operation">
            <input type="submit" value="-" name="operation">
            <input type="submit" value="*" name="operation">
            <input type="submit" value="/" name="operation">
        </lable>
    </form>
    <?php if (!empty($result)) : ?>
        <h2 style="color: #00b100">Результат = <?= $result ?></h2>
    <?php endif; ?>
    
    <?php if (!empty($error)) : ?>
        <h2 style="color: red"><?= $error ?></h2>
    <?php endif ?>
</div>
