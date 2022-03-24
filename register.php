<?
// Страница регситрации нового пользователя
# Соединямся с БД
$db = new mysqli('localhost', 'root', 'root', 'kurs');
$login = $_POST['login'];
$password = $_POST['password'];


if(isset($_POST['submit']))

{

    $err = array();


    # проверям логин

    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))

    {

        $err[] = "Логин может состоять только из букв английского алфавита и цифр";

    }

    

    if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)

    {

        $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";

    }

    

    # проверяем, не сущестует ли пользователя с таким именем
	
    $check_user = mysqli_query($db, "SELECT * FROM user where login='$login' and password='$password'");
	#echo $check_user;
	if(mysqli_num_rows($check_user) > 0)

    {

        $err[] = "Пользователь с таким логином уже существует в базе данных";

    }

    

    # Если нет ошибок, то добавляем в БД нового пользователя

    if(count($err) == 0)

    {

        
        $logins = $_POST['login'];

        

        # Убераем лишние пробелы и делаем двойное шифрование

        $password = md5(md5(trim($_POST['password'])));

        

        $add = mysqli_query($db,"INSERT INTO user set login='$login', password='$password', id='0'");
		#echo $add;
        header("Location: login.php"); exit();

    }

    else

    {

        print "<b>При регистрации произошли следующие ошибки:</b><br>";

        foreach($err AS $error)

        {

            print $error."<br>";

        }

    }

}

?>
<form method="POST">

Логин <input name="login" type="text"><br>

Пароль <input name="password" type="password"><br>

<input name="submit" type="submit" value="Зарегистрироваться">

</form>
