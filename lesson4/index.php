<?php
require_once 'functions.php';

$arGallery = getGallery('gallery');
if (!empty($_FILES)) {
    $path = "gallery/" . $_FILES['photo']['name'];
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $path)) {
        echo 'файл ' . $_FILES['photo']['name'], ' Успешно загружен';
    }
}
?>
<form action="index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="photo">
    <input type="submit" value="Сохранить">
</form>
<?php foreach ($arGallery as $image) : ?>
    <?php if ($image != '.' || $image != '..') : ?>
        <a href="<?= $image ?>"><img src="<?= $image ?>" width="300" style="margin: 10px;"></a>
    <?php endif ?>
<?php endforeach ?>
