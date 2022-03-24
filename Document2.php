<?php
$db = new mysqli('localhost', 'root', 'root', 'kurs');
$email = $_POST['email'];
$pass = $_POST['pass'];
#mysqli_query($db, "INSERT INTO `user` (`email`, `pass`) VALUES ('$email', '$pass')");

if(isset($_POST['submit']))

{

    # Вытаскиваем из БД запись, у которой логин равняеться введенному

    $query = mysql_query("SELECT email, pass FROM user WHERE email='".mysql_real_escape_string($_POST['email'])."' LIMIT 1");

    $data = mysql_fetch_assoc($query);

    

    # Соавниваем пароли

    if($data['pass'] === md5(md5($_POST['password'])))

    {

        

        # Ставим куки

        setcookie("id", $data['user_id'], time()+60*60*24*30);

        setcookie("hash", $hash, time()+60*60*24*30);

        

        # Переадресовываем браузер на страницу проверки нашего скрипта

        header("Location: check.php"); exit();

    }

    else

    {

        print "Вы ввели неправильный логин/пароль";

    }

}

?>