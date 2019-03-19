<?php
include "config.php";

$sql = "select * from products";
$res = mysqli_query($connect,$sql);
while($data = mysqli_fetch_assoc($res)){
    $products[] = $data;
}
?>
