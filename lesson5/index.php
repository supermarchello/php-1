<?php
/**
 * Copyright (c) 2019. Wizard-c
 */

include_once 'models/config.php';
include_once 'models/photo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Работа с файлами</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <h1>ГАЛЕРЕЯ ФОТО</h1>
</header>


<div class="images">
    <?php foreach ($images as $image) : ?>
        <a href="image.php?id=<?= $image['id'] ?>">
            <img src="<?= 'img/' . $image['name'] . '_small.jpg' ?>">
        </a>
    <?php endforeach; ?>
</div>

</body>
</html>
