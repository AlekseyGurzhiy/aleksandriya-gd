<?
	include_once("design/connect_database.php");
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<? $title="Александрия|Контакты"; ?>
		<? include_once("design/head.php");?>
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
				$class_contacts="active_page";
				include_once("design/nav.php");?>
			<section>
			<h2>
				Адрес:
			</h2>
			<div>
				354340, Краснодарский край, г.Сочи, Адлерский район, ул. 8 Марта 18
			</div>
			<h2>
				Электронная почта:
			</h2>
			<div>
				<a class="font_norm" href="mailto:aleksandriya.gd@yandex.ru">aleksandriya.gd@yandex.ru</a>
			</div>
			<h3> Забронировать номер можно, позвонив по телефону: </h3>
			<div class="phone"> +7 (918) 903-61-79 </div>

				<!-- Карта -->
				<div id="map">
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ar6y_axMQTPOhk289yrWM11sqrLlCzqbV&amp;width=860&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
				</div>

			</section>
		</div>
	</body>
	<script type="text/javascript">
		CKEDITOR.replace('book_message');
	</script>
</html>
