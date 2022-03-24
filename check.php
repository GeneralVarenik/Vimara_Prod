<?

// Скрипт проверки


# Соединямся с БД
$db = new mysqli('localhost', 'root', 'root', 'kurs');
if (isset($_POST['login_u'])) {
    $login_true = mysqli_query($db, "SELECT * FROM `user` WHERE login='".$_POST['login']."' AND password = MD5('".$_POST['password']."')");
    if ($login_true) {
        $user = mysql_fetch_assoc($login_true);
        $_SESSION['login_user'] = $login_true;
        $_SESSION['user_name'] = $user['name']; //или где там имя храниться
    } else echo "Не правильно";
  	}	
echo "Здрасте, ".$_SESSION["user_name"];
?>