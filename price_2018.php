<?
	include_once("design/connect_database.php");
	$Months = array("января","февраля","марта","апреля","мая","июня","июля","августа","сентября","октября","ноября","декабря");
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		<? $title="Александрия|Цены"; ?>
		<? include_once("design/head.php");?>
	</head>

	<body>
	<?
		//Запрос на добавление брони
		include_once("design/book_query.php");

		// Подключаем абсолютные элементы
		include_once("design/absolute.php");

		$query_footnote = mysql_query("SELECT * FROM room_footnote WHERE id_room_footnote=1");
		$row_footnote = mysql_fetch_assoc($query_footnote);

		$query_rooms = mysql_query("SELECT * FROM rooms");
		$query_period = mysql_query("SELECT * FROM period")
	?>
		<div class="content">
			<?
				include_once("design/logo.php");
				$class_price="active_page";
				include_once("design/nav.php");?>
			<section>
			<h1 class="center"> Стоимость номера за сутки на 2021 год </h1>
				<table class="price-table">
					<tr>
						<td rowspan="2" class="bold center size_18 w30per">Номера</td>
						<td colspan="11" class="bold center size_18"> Период проживания </td>
					</tr>
					<tr>
					<?
						while ($row_period = mysql_fetch_assoc($query_period)) {
					?>
						<td class="bold center period_number_name"><?=$row_period['period_name']?></td>
					<?
						}
						mysql_data_seek($query_period, 0);
					?>
					</tr>

					<?
						while ($row_rooms = mysql_fetch_assoc($query_rooms)) {
						$query_room_type = mysql_query("SELECT * FROM rooms_type WHERE id_room_type=".$row_rooms['name']);
						$row_room_type = mysql_fetch_assoc($query_room_type);
					?>
						<tr class="price_record">
							<td class="w30per"><div class="bold"><?=$row_rooms['description_main']?></div><?=$row_rooms['description_more']?></td>
							<?
								while ($row_period = mysql_fetch_assoc($query_period)) {
								$query_price = mysql_query("SELECT * FROM prices WHERE room=".$row_rooms['id']." AND period=".$row_period['id']);
								$row_price = mysql_fetch_assoc($query_price);
							?>
								<td class="price_cell period_number_price"><?=($row_price['price2']!='')&&($row_price['price2']!=0)?($row_price['price']."<hr>".$row_price['price2']):($row_price['price']);?> </td>
							<?
								}
							?>
						</tr>
					<?
						mysql_data_seek($query_period, 0);
						}
					?>

					<tr>
						<td colspan="12" class="size_16 left"><span class="bold">Примечание:</span><?=$row_footnote['footnote']?></td>
					</tr>
					<tr>
						<td colspan="12" class="size_16 left"><span class="bold">Дополнительная информация:</span><?=$row_footnote['more_info']?></td>
					</tr>

				</table>

			</section>
		</div>
	</body>
	<script type="text/javascript">
		CKEDITOR.replace('book_message');
	</script>
</html>
