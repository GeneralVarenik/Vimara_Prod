<?php
 session_start();
$db = new mysqli('localhost', 'root', 'root', 'kurs');

 $id = $_GET['id'];

 mysqli_query($db, "DELETE FROM `comments` WHERE `comments`.`comment_id` = $id");
 header("Location: VIMARA.php");
?>