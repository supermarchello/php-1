<?php

include_once 'models/config.php';
include_once 'models/product.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Каталог</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <h1>Каталог</h1>
</header>


<div class="images">
    <?php foreach ($products as $product) : ?>
        <p><?= $product['name'] ?></p>
        <a href="detail.php?id=<?= $product['id'] ?>">
            <img src="<?= $product['preview_picture'] ?>">
        </a>
        <p><?= $product['preview_text'] ?></p>
    <?php endforeach; ?>
</div>

</body>
</html>
