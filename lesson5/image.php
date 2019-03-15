<?php
/**
 * Copyright (c) 2019. Wizard-c
 */

include_once 'models/config.php';
include_once 'controller/image.php';
$image = getImageById((int)$_GET['id']);
updateViews((int)$_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Работа с файлами</title>
</head>
<body>
<a href="index.php"> Вернуться в галерею </a>
<div>
    <img src="<?= $image['path'] ?>">
</div>
<div>
    <h3>Число просмотров: <span><?= $image['views'] ?></span></h3>
</div>
</body>
</html>
