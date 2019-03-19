<?php
include_once '../models/config.php';

function getProductById($id)
{
    $result = [];
    global $connect;
    $sql = "select * from product where id=" . $id;
    $res = mysqli_query($connect, $sql);
    while ($data = mysqli_fetch_assoc($res)) {
        $image = $data;
    }
    if (!empty($image)) {
        $result['path'] = $image['path'] . '/' . $image['name'] . '.jpg';
        $result['views'] = $image['views'];
    }
    
    return $result;
}

function updateViews($id)
{
    global $connect;
    $sql = "update product set views=views + 1 where id=$id";
    $res = mysqli_query($connect, $sql);
    return $res;
}