<?php
/**
 * @param $path
 * Фунция принимает путь, и возвращает массив содержащий ссылки к файлам
 *
 * @return array
 */
function getGallery($path)
{
    return scandir($path, 1);
}