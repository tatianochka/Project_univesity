<?php session_start();?>
<!DOCTYPE>
<html lang="ru">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width"/>
		<title>HealthyTeeth</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/doctors.css" />
		<link rel="stylesheet" href="css/home.css" />
		<link rel="stylesheet" href="css/form1.css" />
		<link rel="stylesheet" href="css/callback.css" />
		<link rel="stylesheet" href="css/reviews.css" />
		<link rel="stylesheet" href="css/signin.css" />
		<link rel="stylesheet" href="css/media.css" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css" />

		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
	<body>
	<header class="Header">
		<div class="container">
			<div class="HeaderWrapper">
				<a href="index.php">
					<div class="Logo">
					<div class="Logo-img"><img src="img/logo.jpg" height="50" width="48"></div>
					<div class="Logo-name">HealthyTeeth</div>
					</div>
				</a>
				<div class="Nav">
					<ul>
						<li><a href="index.php">О нас</a></li>
						<li><a href="doctors.php">Врачи</a></li>
						<li><a href="reviews.php">Отзывы</a></li>
						<li><a href="registration.php">Регистрация</a></li>
						<li>
<?php 
	require_once('/login.php');
?>
						</li>
					</ul>
				</div>
			</div>
		</div>
			<section class="Infotmation">
			<div class="container">
				<div class="HomeInfotmation-wrapper">
					<div class="HomeInfotmation-contacts">
						<div class="HomeInfotmation-contact">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<div class="phones">
								<span>+380992374526</span>
								<span>+380972372428</span>
							</div>
						</div>
						<div class="HomeInfotmation-contact">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<div class="email">
								<span>healthyteeeth@gmail.com</span>
							</div>
						</div>
					</div>
					<div class="HomeInfotmation-socials">
						<a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-tumblr-square" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="Infotmation-title">
					<span>Стоматологическая клиника heathyteeth</span>
				</div>
				<div class="HomeInfotmation-way_to_form">
					<a href="#form1"><button>записаться</button></a>
				</div>
			</div>
			</section>
	</header>
	<section class="Reviews">
		<h2>Оставьте отзыв о нашей клинике</h2>
		<div class="New_coment">
			<div class="foto">
				<img src="img/user.png" width="100px" height="100px">
			</div>
			<div class="coment">
				<textarea placeholder="Введите ваш коментарий" rows="6" cols="70"></textarea><br>
			</div>
		</div>
		<div class="submit">
			<input type="text" name="name_review" id="name_review" value="" size="25" placeholder="Введите имя и фамилию" />
			<select name="type_of_doctor review" >
					<option selected="selected">Выбор врача</option>
					<option >Синенко А.Л.</option>
					<option >Марченко С.Н</option>
					<option>Кириенко Р.Т.</option>
			</select>
			<button>Отправить</button>
		</div>
		<h2>Отзывы</h2>
		<div class="place_for_commit">
			<div class="user">
				<img src="img/user.png" width="60px" height="60px">
				<p>Имя Фамилия</p>
			</div>
			<div class="content">
				<p>Содержание коментария.оваим выапи ывапи ыпаи ывпаи ывре еы впер ывер ы ери рекп в яияв т</p>
			</div>
		</div>
	</section>

	<section class="Form_of_visitation">
	<p><a id="form1"></a></p>
		<div class="Form_of_visitation_title">
			<div>
				<h2>Запишитесь на прием прямо сейчас</h2>
				<p>Какой-то текст, описывает какая классная у нас клиника, много качественных услуг она предлагает, и еще много много всего</p>
			</div>
		</div>
<?php 
	require_once('/forma.php');
?>
	</section>
<?php 
	require_once('/callback.php');
?>
	<script src="js/common.js"></script>	
	</body>
</html>