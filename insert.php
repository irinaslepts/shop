<?php 
$connect = mysqli_connect("127.0.0.1", "root", "", "shop");
mysqli_query($connect, "INSERT INTO tovar (title, img, descript, price) VALUES ('".$_GET['title']."', '".$_GET['img']."', '".$_GET['desc']."', '".$_GET['price']."')");
header("Location: index.php");
 ?>