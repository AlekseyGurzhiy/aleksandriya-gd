<?
	include_once("design/connect_database.php");
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		<? $title="Александрия|Документы"; ?>
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
  $class_doc="active_page";
  include_once("design/nav.php");
?>
  <section>

    <h1 class="center"> Документы </h1>

    <div class="fl_left">
			<a rel="aleksa_rools" href="img/rools_aleksa.pdf" title="Правила проживания в гостевом доме Александрия Адлер"> <img src="img/rools_button.png" alt="Правила проживания в гостевом доме Александрия Адлер"> </a>
			<br>
			<a rel="example_group" href="img/svid_aleks.jpg" title="Свидетельство о присвоении категории гостевой дом Александрия"> <img src="img/svid_aleks_mini.jpg" alt="Свидетельство о присвоении категории гостевой дом Александрия"> </a>
    </div>
    <div class="fl_right">
      <a rel="example_group" href="img/karta_ip_aleks.png" title="Карта индивидуального предпринимателя"> <img src="img/karta_ip_aleks_mini.jpg"> </a>
			<br>
			<a rel="example_group" href="img/pril_k_svid.jpg" title="Приложение к свидетельству о присвоении категории гостевой дом Александрия"> <img src="img/pril_k_svid_mini.jpg" alt="Приложение к свидетельству о присвоении категории гостевой дом Александрия"> </a>
    </div>


  </section>
  </div>


  </body>
</html>
