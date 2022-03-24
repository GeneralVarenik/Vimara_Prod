<?php
$db = new mysqli('localhost', 'root', 'root', 'news');
$name = $_POST['name'];
$mail = $_POST['email'];
mysqli_query($db, "INSERT INTO `news` (`name`, `mail` ) VALUES ('$name', '$mail')");
header("Location: VIMARA.html");
?>