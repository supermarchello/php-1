<?php
include_once '../models/config.php';

function getImageById($id)
{
    $result = [];
    global $connect;
    $sql = "select * from images where id=" . $id;
    $res = mysqli_query($connect, $sql);
    while ($data = mysqli_fetch_assoc($res)) {
        $image = $data;
    }
    if (!empty($image)) {
        $result['path']  = $image['path'] . '/' . $image['name'] . '.jpg';
        $result['views'] = $image['views'];
    }
    
    return $result;
}

function updateViews($id)
{
    $views = getImageById($id)['views'] + 1;
    global $connect;
    $sql = "update images set views=$views where id=$id";
    $res = mysqli_query($connect, $sql);
    
    return $res;
}