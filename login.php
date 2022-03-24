<?
// Страница авторизации



# Функция для генерации случайной строки

function generateCode($length=6) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";

    $code = "";

    $clen = strlen($chars) - 1;  
    while (strlen($code) < $length) {

            $code .= $chars[mt_rand(0,$clen)];  
    }

    return $code;

}



# Соединямся с БД

$db = new mysqli('localhost', 'root', 'root', 'kurs');
$login = $_POST['login'];
$password = md5(md5($_POST['password']));
session_start();

if(isset($_POST['submit']))

{

    # Вытаскиваем из БД запись, у которой логин равняеться введенному

    $query = mysqli_query($db, "SELECT * FROM user WHERE login='$login' and password='$password'");
	


    

    # Соавниваем пароли

    if(mysqli_num_rows($query) > 0)

    {

        # Генерируем случайное число и шифруем его

       

            

        /*if(!@$_POST['not_attach_ip'])

        {

            # Если пользователя выбрал привязку к IP

            # Переводим IP в строку

            $insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";

        }*/

        

        # Записываем в БД новый хеш авторизации и IP

        #mysqli_query($db, "UPDATE user SET user_hash='".$code."' ".$insip." WHERE user_id='".$data['user_id']."'");

        

        # Ставим куки

        setcookie("id", $data['user_id'], time()+60*60*24*30);



		#echo "Здрасте, ".$_SESSION["login"];

        # Переадресовываем браузер на страницу проверки нашего скрипта
		$data = mysqli_fetch_assoc($query);
		$_SESSION['user']=[
		"login" => $data['login'],
		"user" => $data['id'],
		];
		#echo $_SESSION ['user']['user'];
        header("Location: VIMARA.php"); 

    }

    else

    {

        print "Вы ввели неправильный логин/пароль";

    }

}

?>

<form method="POST">

Логин <input name="login" type="text"><br>

Пароль <input name="password" type="password"><br>

<!--Не прикреплять к IP(не безопасно) <input type="checkbox" name="not_attach_ip"><br>-->

<input name="submit" type="submit" value="Войти">

</form>