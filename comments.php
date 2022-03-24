<?php
    session_start();
    $db = new mysqli('localhost', 'root', 'root', 'kurs');

    $comment_text = $_POST ['comment_text'];
    $user_id = $_SESSION['user']['user'];
	$login = $_SESSION['user']['login'];
    if (isset($comment_text)){
        mysqli_query($db, "INSERT INTO comments (login, user_id, comment_id, comment_text) VALUES ('$login', $user_id, NULL, '$comment_text')");
        header("Location: VIMARA.php");
    }else{
        $_SESSION['msg']="Дебил напиши хоть что нибудь";
        header("Location: VIMARA.php");
    }
?>