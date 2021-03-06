<?php $db = new mysqli('localhost', 'root', 'root', 'kurs');
session_start();
if (!isset($_SESSION['user']['user'])){
    $_SESSION['user']['user'] = 0;
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
<title>VIMARA - Main</title>
<link rel="stylesheet" href="Style.css">
</head>
<script src="Doc1.js"></script>
	
<body link="white" vlink="white">
	<div>
	<div class="bluetop">
		<div id="toptext">
		 <div class="main">
		 <p>Интерактивный </br>конструктор сайтов</p>
		 </div id="manytext">
			<div class="textline">
				<ul>
				<li><a class="style"href="#setting">Назначение</a></li>
				<li><a class="style"href="#example">Примеры</a></li>
				<li><a class="style"href="#option">Инструменты</a></li>
				<li><a class="style"href="#powerful">Достоинства</a></li>
				<li><a class="style"href="#price">Тарифы</a></li>
				<li><a class="style"href="#"onclick="openForm1()">Вход/Регистрация</a></li>
				</ul>
			</div>
			<div class="form-popup1" id="myForm1">
  				<form action="login.php" method=POST class="form-container">
   				   <h2>Войти на сайт</h2>

   				   <!--<label for="name"><b>Логин</b></label>
   				   <input type="text" placeholder=Логин" name="email" required>
  
  				   <label for="email"><b>Пароль</b></label>
   				   <input type="password" placeholder="Пассворд" name="pass" required>-->

  				   <button type="submit" class="btn">Войти</button>
   				</form>
				<form action="register.php" method=POST class="form-container">
				<button type="submit" class="btn cancel">Регистрация</button>
				<button type="button" class="btn cancel" onclick="closeForm1()">Закрыть</button>
				</form>
  			</div>
		</div>
	</div>
	<div class="image">
			<h1>Функциональный комплекс инструментов по созданию<br />веб-сайтов для проффесиональных разработчиков</h1>
			<a class="knopka01">Связаться с партнёром</a>
	</div> 
	<div class="compimage">
			<div>
				<a name="setting"><h2>C помощью VIMARA разрабатываются</h2></a>
			<ul>
				<li><img src="galka.png">Информационные корпоративные сайты<br/>для малого и среднего бизнеса.</li>
				<li><img src="notgalka.png">Интернет-магазины любой сложности.</li>
				<li><img src="notgalka.png">Презентационные медиа-сайты.</li>
				<li><img src="notgalka.png">Новостные порталы интернет-изданий</li>
				<li><img src="notgalka.png">Интернет-каталоги с системами<br/>персонифицированного доступа.</li>
				<li><img src="notgalka.png">Социальные сети и сайты, специализированные<br/>на компьютерных сообществах.</li>
				<li><img src="notgalka.png">Информационные порталы для крупного<br/> бизнеса</li>
			</ul>
			</div>
	</div>
	<div class="downblock">
		<div>
				<a name="example"><p>Примеры разработанных сайтов</p></a>
			<div class="buttons">
				<a>Недвижимость</a>
				<a>Образование</a>
				<a>Медицина</a>
				<a>Ремонт</a>
				<a>Магазин</a>
				<a>Мероприятия</a>
				<a>Туризм</a>
				<a>Авто</a>
				<a>Инфобизнес</a>
				<a>Новости</a>
				<a>Спорт</a>
				<a>Строительство</a>
			</div>
			<div class="example">
				<div class="photo1"><br/></div>
				<div class="photo2"><br/></div>
				<div class="photo1"><br/></div><br/>
				<div class="photo2"><br/></div>
				<div class="photo1"><br/></div>
				<div class="photo2"><br/></div>
			</div>
		</div>
	</div>
	<div class="littledownpicture">
		<div class="setting">
			<p>Cвяжитесь с нашими партнёрами,<br/>чтобы заказать разработку сайта</p>
			<a class="knopka03">Связаться с Партнёром</a>
				<a name="option"><p id="set">Инструменты системы</p></a>
			</div>

		<div class="tabsetting">
			<ul class="littletable">
				<li class="littletable11">
				<img src="setting.png"><p class="fortab2">CMS - система интерактивного управления содержимым сайта.</p></li>
				<li class="littletable1">
				<img src="kubik.png"><p>Внутренний набор функций (framework) для разработки дополнительных модулей и приложений.</p></li>
				<li class="littletable1">
				<img src="teg.png"><p>Набор популярных библиотек, используемых при разработке современных веб-ресурсов «под ключ»</p></li>
				</ul>
			</ul>
			<div class="littletable2">
			<p class="fortab3">Поддержка нескольких языков</p>
				<p class="fortab4">По умолчанию доступны русский и английский языки. При этом система расширяема и может быть снабжена переводом на любой язык.  Система разграничения прав пользователей  В системе существует возможность установить права пользования на каждый из модулей CMS.</p> 
			<p class="fortab3">Модульность<br></p>  
				<p class="fortab4">Помимо стандартных модулей, в CMS есть возможность подключать модули разработанные отдельно или специально для вашего сайта.</p>
				<a href="#"><p class="fortab5">Посмотреть описание стандартных модулей</p></a>
				<a class="knopka04">Посмотреть</a>
			</div>
		</div>
		
    </div> 
	<div class="wihtoutpicture">
		<div>
			<a name="powerful"><p>Достоинства</p></a>
		</div>
		<div>
			<div class="tablefortext">
			 <div id="tabfortext">
				<div class="tablewithtext">
				<p class="text">Высокий жизненный цикл ресурса</p>
				<hr>
				<p class="texttoo">Система поддерживает современные технологии и стандарты: web 2.0, HTML 5, CSS 3, AJAX, Smarty и предусматривает автоматическую модернизацию без структурного изменения сайта.</p>
				</div>
				<div class="tablewithtext">
				<p class="text"> Модульность и масштабируемость</p>
				<hr>
				<p class="texttoo">Любая новая функция для вашего сайта может быть разработана 
									и подключена отдельно, не нарушая работу всего ресурса.</p>
				</div>
				<div class="tablewithtext">
				<p class="text">Технология взаимодействия MVC</p>
				<hr class="line">
				<p class="texttoo">Модель MVC – это технология «модель-представление-контроллер». Использование данной модели 
									позволяет вести разработку дизайна сайта без вмешательства непосредственно в логику работы 
									ресурса и наоборот.</p>
				</div>
				<div class="tablewithtext">
				<p class="text">Ориентация <br/>на разработчика</p>
				<hr>
				<p class="texttoo">Профессиональным разработчикам предоставляется ряд популярных инструментов для упрощения работы: jQuery, MySQL, PHP, Smarty.</p>
				</div>
				<div class="tablewithtext">
				<p class="text"> Дружелюбие <br/>к поисковым системам</p>
				<hr>
				<p class="texttoo">Система не требует отдельной оптимизации кода под поисковые системы, что значительно упрощает этап продвижения сайта.</p>
				</div>
				<div class="tablewithtext">
				<p class="text">Удобство <br/>пользования</p>
				<hr>
				<p class="texttoo">В реализации CMS и модулей использован интуитивно понятный интерфейс. Конструктор и созданные сайты корректно работают на различных платформах, браузерах и не требуют ресурсоёмких компьютеров.</p>
				</div>
			 </div>
			</div>
		</div>
	</div>
	<div class="moredownpicture">
		<div>
			<a name="price"><p>Тарифные планы</p></a>
		</div>
		<div class="options">
			<div class="currectlyoptions">
					<div class="optionimage">
						<p>Лайт</p>
					</div>
					<div class="fortextfiction">
						<p class="textfiction2">Преимущество</p>
						<hr>
						<p class="textfiction2">Преимущество</p>
						<hr>
						<p class="textfiction3">Преимущество</p>
						<hr>
						<p class="textfiction3">Преимущество</p>
						<hr>
						<p class="textfiction3">Преимущество</p>
						<hr>
						<p class="textfiction3">Преимущество</p>
						<hr>
						<p class="textfiction3">Преимущество</p>
						<hr>
						<p class="textfiction3">Преимущество</p>
						<hr>
						<p class="textfiction4">500</p><p class="textfiction5">руб./месяц</p>
						<a class="knopka05">Связаться с партнером</a>
					</div>
			</div>
			<div class="currectlyoptions">
				<div class="optionimage1">
				<p>Оптимальный</p>
				</div>
					<div class="fortextfiction">
						<p class="textfiction2">Преимущество</p>
						<hr>
						<p class="textfiction2">Преимущество</p>
						<hr>
						<p class="textfiction2">Преимущество</p>
						<hr>
						<p class="textfiction2">Преимущество</p>
						<hr>
						<p class="textfiction3">Преимущество</p>
						<hr>
						<p class="textfiction3">Преимущество</p>
						<hr>
						<p class="textfiction3">Преимущество</p>
						<hr>
						<p class="textfiction3">Преимущество</p>
						<hr>
						<p class="textfiction4">1000</p><p class="textfiction5">руб./месяц</p>
						<a class="knopka05">Связаться с партнером</a>
					</div>
			</div>
			<div class="currectlyoptions">
				<div class="optionimage">
				<p class="textfiction">Премиум</p>
				</div>
					<div class="fortextfiction">
						<p class="textfiction2">Преимущество</p>
						<hr>
						<p class="textfiction2">Преимущество</p>
						<hr>
						<p class="textfiction2">Преимущество</p>
						<hr>
						<p class="textfiction2">Преимущество</p>
						<hr>
						<p class="textfiction2">Преимущество</p>
						<hr>
						<p class="textfiction2">Преимущество</p>
						<hr>
						<p class="textfiction2">Преимущество</p>
						<hr>
						<p class="textfiction2">Преимущество</p>
						<hr>
						<p class="textfiction4">1500</p><p class="textfiction5">руб./месяц</p>
						<a class="knopka05">Связаться с партнером</a>
					</div>
			</div>
		</div>
	</div>
	<div class="downfon">
		<div>
		<p>Оставьте контактные данные, мы перезвоним<br/>и бесплатно проконсультируем вас по всем вопросам</p>
		<input type="text" class="knopka07" placeholder="Введите ваше имя">
		<input type="text" class="knopka07" placeholder="Введите ваш телефон">
		<input type="button" class="knopka08" value="Консультация">
		</div>
	</div>
	<div class="moredownpicture">
	<p>Отзывы клиентов</p>
	
	<!----------КОММЕНТЫ------------
    ?>-->

    <div class="d-flex flex-column align-items-center">
    <form name="comments" method="POST" action="comments.php">
        <label><?php echo $_SESSION['user']['login']?></label><br>
        <input type="text" class="from-control" name="comment_text" placeholder="Текст коментария"><br>
        <button type="submit">Отправить коментарий</button>
    </form>
    <!---->
    </div>

    <br>
    
    <div class="d-flex flex-column align-items-center">
    <?php
            $sel_get = mysqli_query($db, "SELECT * FROM comments c JOIN user ON c.user_id = user.user_id");
            while ($sel_get_wh = mysqli_fetch_assoc($sel_get)){ ?>
                <div class="badge badge-primary"><?php echo $sel_get_wh['login'];?></div>
                <br>
                <div class="text"><?php echo $sel_get_wh['comment_text']?></div>
                <br>
                <?php
                    if ($_SESSION ['user']['user']== 1){ ?>
                    <a style="color: red;" href="DeleteComent.php?id=<?= $sel_get_wh['comment_id'] ?>">Удалить коментарий</a></td>
                <?php } ?>
            <?php } ?>
    </div>
	
	
<!--------------------rassilka---------------->

<button class="open-button" onclick="openForm()">Подпишитесь на рассылку</button>

<div class="form-popup" id="myForm">
  <form action="news.php" method=POST class="form-container">
    <h2>Быть в курсе новостей</h2>

    <label for="name"><b>Имя</b></label>
    <input type="text" placeholder="Ваше имя" name="name" required>
  
  <label for="email"><b>Е-мail</b></label>
    <input type="text" placeholder="Ваш е-мейл" name="email" required>

    <button type="submit" class="btn">Отправить</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Закрыть</button>
  </form>
</div>
		<div class="whitebottom">
			<div id="cartoon">
				<div class="bottomtext">
				<ul>
				<li><a class="style"href="#setting">Назначение</a></li>
				<li><a class="style"href="#example">Примеры</a></li>
				<li><a class="style"href="#option">Инструменты</a></li>
				<li><a class="style"href="#powerful">Достоинства</a></li>
				<li><a class="style"href="#price">Тарифы</a></li><br/>
				<li id="infotext"><a href="#price">Политика конфидециальности</a></li>
				</ul>
			</div>	
				<div class="number">
					<p>8-800-555-35-35</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>