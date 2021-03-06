<?
	include_once("design/connect_database.php");
	include_once("class/reviews.php");

	$reviews = new Reviews();

	// Если нажата кнопка "Добавить отзыв"
	if (isset($_POST['send_reviews'])){
		// Вызываем метод загрузки данных в базу данных
		/*$reviews->LoadDate($_POST['reviews_fio'], $_POST['reviews_whence'], $_POST['reviews_email'], date('Y-m-d', strtotime($_POST['reviews_startdate'])), date('Y-m-d', strtotime($_POST['reviews_enddate'])), $_POST['message']);*/
mysql_query("INSERT INTO `reviews` (`fio`,`whence`,`email`,`date_start`,`date_end`,`main_text`) VALUES ('".$_POST['reviews_fio']."','".$_POST['reviews_whence']."','".$_POST['reviews_email']."','".date('Y-m-d', strtotime($_POST['reviews_startdate']))."','".date('Y-m-d', strtotime($_POST['reviews_enddate']))."','".$_POST['message']."')");

		// Перезагружаем страницу
		header('Location: http://aleksandriya-gd.ru/reviews.php');
	}

	$query = $reviews->getDate();

?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		<? $title="Александрия|Отзывы"; ?>
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
				$class_reviews="active_page";
				include_once("design/nav.php");
			?>
			<section>
				<a href="#" class="add_reviews-button">Добавить отзыв</a>
			<?
				while ($row = mysql_fetch_assoc($query)){
			?>
				<article>
					<h4><?= $row['fio']?> (<?=$row['whence']?>)<span>Период отдыха: с <?=date("d.m.Y",strtotime($row['date_start']))?> по <?=date("d.m.Y",strtotime($row['date_end']))?></span></h4>
					<p><?=$row['main_text']?></p>
				</article>
			<?
				}
			?>
			</section>
		</div>
	</body>
	<script type="text/javascript">
		CKEDITOR.replace('message');
		CKEDITOR.replace('book_message');
	</script>
</html>
