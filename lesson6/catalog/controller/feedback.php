<?php
include_once '../models/config.php';

$arFeedbacks = [];
$prodcutId   = (int)$_GET['id'];
$sql         = "select * from feedback where product_id=" . $prodcutId;
$dbRes = mysql_query($connect, $sql);
while ($arRes = mysqli_fetch_assoc($dbRes)){
    $arFeedbacks[] = $arRes;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['NAME']) && !empty($_POST['message'])){
    $name = htmlspecialchars($_POST['NAME']);
    $message = htmlspecialchars($_POST['MESSAGE']);
    $sql = "INSERT INTO feedback VALUES ($name, $message)";
    $res = mysqli_query($connect, $sql);
}