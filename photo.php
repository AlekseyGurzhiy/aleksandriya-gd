<?
	include_once("design/connect_database.php");
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		<? $title="Александрия|Фотогалерея"; ?>
		<? include_once("design/head.php");?>
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
				$class_photo="active_page";
				include_once("design/nav.php");
			?>
			<section>
				<h2> Фасад гостевого дома "Александрия" </h2>
				<div class="one_photo"> <a rel="example_group" href="photo/big/1.jpg" title="Вход в гостевой дом"> <img src="photo/small/1_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group" href="photo/big/2.jpg" title="Вход в гостевой дом"> <img src="photo/small/2_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group" href="photo/big/3.jpg" title="Вход в гостевой дом"> <img src="photo/small/3_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group" href="photo/big/4.jpg" title="Вход в гостевой дом"> <img src="photo/small/4_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group" href="photo/big/5.jpg" title="Вход в гостевой дом"> <img src="photo/small/5_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group" href="photo/big/6.jpg" title="Вход в гостевой дом"> <img src="photo/small/6_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group" href="photo/big/7.jpg" title="Вход в гостевой дом"> <img src="photo/small/7_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>

				<h2> Двухместный с двумя односпальными кроватями. 20 кв.м. </h2>
				<div class="one_photo"> <a rel="example_group1" href="photo/big/8.jpg" title="Двухместный с двумя односпальными кроватями"> <img src="photo/small/8_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group1" href="photo/big/9.jpg" title="Двухместный с двумя односпальными кроватями"> <img src="photo/small/9_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group1" href="photo/big/10.jpg" title="Двухместный с двумя односпальными кроватями"> <img src="photo/small/10_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group1" href="photo/big/11.jpg" title="Двухместный с двумя односпальными кроватями"> <img src="photo/small/11_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group1" href="photo/big/12.jpg" title="Двухместный с двумя односпальными кроватями"> <img src="photo/small/12_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>

				<h2> Двухместный номер с двухспальной кроватью </h2>
				<div class="one_photo"> <a rel="example_group3" href="photo/big/13.jpg" title="Двухместный номер с двухспальной кроватью"> <img src="photo/small/13_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group3" href="photo/big/14.jpg" title="Двухместный номер с двухспальной кроватью"> <img src="photo/small/14_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group3" href="photo/big/15.jpg" title="Двухместный номер с двухспальной кроватью"> <img src="photo/small/15_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group3" href="photo/big/16.jpg" title="Двухместный номер с двухспальной кроватью"> <img src="photo/small/16_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group3" href="photo/big/17.jpg" title="Двухместный номер с двухспальной кроватью"> <img src="photo/small/17_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group3" href="photo/big/18.jpg" title="Двухместный номер с двухспальной кроватью"> <img src="photo/small/18_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group3" href="photo/big/19.jpg" title="Двухместный номер с двухспальной кроватью"> <img src="photo/small/19_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group3" href="photo/big/20.jpg" title="Двухместный номер с двухспальной кроватью"> <img src="photo/small/20_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group3" href="photo/big/21.jpg" title="Двухместный номер с двухспальной кроватью"> <img src="photo/small/21_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>

				<h2> Двухместный с двумя односпальными кроватями </h2>
				<div class="one_photo"> <a rel="example_group2" href="photo/big/22.jpg" title="Двухместный с двумя односпальными кроватями. 2 и 3 этаж"> <img src="photo/small/22_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group2" href="photo/big/23.jpg" title="Двухместный с двумя односпальными кроватями. 2 и 3 этаж"> <img src="photo/small/23_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group2" href="photo/big/24.jpg" title="Двухместный с двумя односпальными кроватями. 2 и 3 этаж"> <img src="photo/small/24_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group2" href="photo/big/25.jpg" title="Двухместный с двумя односпальными кроватями. 2 и 3 этаж"> <img src="photo/small/25_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group2" href="photo/big/26.jpg" title="Двухместный с двумя односпальными кроватями. 2 и 3 этаж"> <img src="photo/small/26_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group2" href="photo/big/27.jpg" title="Двухместный с двумя односпальными кроватями. 2 и 3 этаж"> <img src="photo/small/27_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group2" href="photo/big/28.jpg" title="Двухместный с двумя односпальными кроватями. 2 и 3 этаж"> <img src="photo/small/28_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group2" href="photo/big/29.jpg" title="Двухместный с двумя односпальными кроватями. 2 и 3 этаж"> <img src="photo/small/29_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>

				<h2> Двухместный с двумя односпальными кроватями </h2>
				<div class="one_photo"> <a rel="example_group4" href="photo/big/30.jpg" title="Двухместный с двумя односпальными кроватями. 4 этаж"> <img src="photo/small/30_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group4" href="photo/big/31.jpg" title="Двухместный с двумя односпальными кроватями. 4 этаж"> <img src="photo/small/31_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group4" href="photo/big/32.jpg" title="Двухместный с двумя односпальными кроватями. 4 этаж"> <img src="photo/small/32_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group4" href="photo/big/33.jpg" title="Двухместный с двумя односпальными кроватями. 4 этаж"> <img src="photo/small/33_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group4" href="photo/big/34.jpg" title="Двухместный с двумя односпальными кроватями. 4 этаж"> <img src="photo/small/34_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group4" href="photo/big/35.jpg" title="Двухместный с двумя односпальными кроватями. 4 этаж"> <img src="photo/small/35_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group4" href="photo/big/36.jpg" title="Двухместный с двумя односпальными кроватями. 4 этаж"> <img src="photo/small/36_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group4" href="photo/big/37.jpg" title="Двухместный с двумя односпальными кроватями. 4 этаж"> <img src="photo/small/37_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>

				<h2> Трёхместный номер </h2>
				<div class="one_photo"> <a rel="example_group5" href="photo/big/38.jpg" title="Трёхместный номер"> <img src="photo/small/38_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group5" href="photo/big/39.jpg" title="Трёхместный номер"> <img src="photo/small/39_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group5" href="photo/big/40.jpg" title="Трёхместный номер"> <img src="photo/small/40_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group5" href="photo/big/41.jpg" title="Трёхместный номер"> <img src="photo/small/41_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group5" href="photo/big/42.jpg" title="Трёхместный номер"> <img src="photo/small/42_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group5" href="photo/big/43.jpg" title="Трёхместный номер"> <img src="photo/small/43_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group5" href="photo/big/44.jpg" title="Трёхместный номер"> <img src="photo/small/44_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group5" href="photo/big/45.jpg" title="Трёхместный номер"> <img src="photo/small/45_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group5" href="photo/big/46.jpg" title="Трёхместный номер"> <img src="photo/small/46_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group5" href="photo/big/47.jpg" title="Трёхместный номер"> <img src="photo/small/47_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>

				<h2> Общая кухня на втором этаже </h2>
				<div class="one_photo"> <a rel="example_group6" href="photo/big/48.jpg" title="Кухня"> <img src="photo/small/48_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group6" href="photo/big/49.jpg" title="Кухня"> <img src="photo/small/49_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group6" href="photo/big/50.jpg" title="Кухня"> <img src="photo/small/50_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group6" href="photo/big/51.jpg" title="Кухня"> <img src="photo/small/51_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>

				<h2> Дополнительно </h2>
				<div class="one_photo"> <a rel="example_group7" href="photo/big/52.jpg" title="Стиралка"> <img src="photo/small/52_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>
				<div class="one_photo"> <a rel="example_group7" href="photo/big/53.jpg" title="Гладильная доска"> <img src="photo/small/53_mini.jpg" alt="Гостевой дом Александрия Адлер"> </a> </div>

			</section>
		</div>
	</body>
	<script type="text/javascript">
		CKEDITOR.replace('book_message');
	</script>
</html>
