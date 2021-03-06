<?
	include_once("design/connect_database.php");
	$number = -1;
	if (isset($_POST['autorize_submit'])){
		$string_query = "SELECT * FROM `users` WHERE `login`='".$_POST['piano_login']."' AND `password`='".$_POST['piano_password']."'";
		//echo $string_query." <br />";
		$query = mysql_query($string_query);
		//$query = mysql_query("SELECT * FROM `users` WHERE `login`='1' OR id=1");#' AND `password`='1' OR id=1");
		$number = mysql_num_rows($query);
		//echo $number;
		if($number == 1){
			$row = mysql_fetch_assoc($query);
			$_SESSION['s_login'] = $row['login'];
			$_SESSION['s_name'] = $row['name'];
			$_SESSION['s_surname'] = $row['surname'];
			$_SESSION['s_rang'] = "admin";
			header('Location: http://aleksandriya-gd.ru/editor_pr/');
		}

	}
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta name='wmail-verification' content='238100b8ef9e8eda009c6147f8826049' />
		<? $title="Александрия|Авторизация"; ?>
		<? include_once("design/head.php"); ?>
	</head>

	<body>
	<?
		//Запрос на добавление брони
		include_once("design/book_query.php");

		// Подключаем абсолютные элементы
		include_once("design/absolute.php");
	?>

	<div class="content">
	<?
		include_once("design/logo.php");
		include_once("design/nav.php");
	?>
		<section>
			<?
				if($number == 0){
			?>
				<h2 class="autoriz_h2 red"> При вводе логина/пароля произошла ошибка! </h2>
			<?
				} else {
			?>
				<h2 class="autoriz_h2"> Авторизируйтесь, пожалуйста! </h2>
			<?
				}
			?>


			<form method="post" action="">
				<div class="autoriz_area">
					<h4> Введите логин и пароль </h4>
					<div class="autorize_login">
						<div class="autorize_login-text"><label for="piano_login">Логин:</label></div>
						<div class="autorize_login-input"><input type="text" name="piano_login" id="piano_login" required></div>
					</div>
					<div class="clear"></div>
					<div class="autorize_password">
						<div class="autorize_password-text"><label for="piano_password">Пароль:</label></div>
						<div class="autorize_password-input"><input type="password" name="piano_password" id="piano_password" required></div>
					</div>
					<div class="clear"></div>
					<div class="autoriz_area-submit">
						<input type="submit" class="autorize_submit" name="autorize_submit" value="Поехали!">
					</div>
				</div>
			</form>
		</section>
	</div>
	</body>
</html>
