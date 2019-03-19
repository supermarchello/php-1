<?php

include_once 'models/config.php';
include_once 'controller/image.php';
include_once 'controller/feedback.php';
$product = getProductById((int)$_GET['id']);
updateViews((int)$_GET['id']);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Товар - <?=$product['name']?></title>
</head>
<body>
<a href="index.php">Вернуться в каталог </a>
<div>
    <img src="<?= $product['detail_picture'] ?>">
</div>
<div>
    <h3>Число просмотров: <span><?= $product['views'] ?></span></h3>
</div>
<div>
    <h3>Отзывы: </h3>
    <div>
        <?php if (!empty($arFeedbacks)) : ?>
            <?php foreach ($arFeedbacks as $arFeedback) : ?>
                <div>
                    <span><?= $arFeedback['name'] ?></span>
                    <p><?= $arFeedback['message'] ?></p>
                </div>
            <?php endforeach ?>
        <?php endif ?>
    </div>
    <h3>Добавить отзыв</h3>
    <form action="detail.php" method="POST">
        <div>
            <lable>Введите ваше Имя:
                <input type="text" name="NAME" required>
            </lable>
        </div>
        <div>
            <lable>Введите ваше сообщение:
                <textarea name="MESSAGE" required></textarea>
            </lable>
        </div>
        <input type="submit" value="Отправить">
    </form>
</div>
</body>
</html>
