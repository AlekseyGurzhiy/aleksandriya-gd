<?
	include_once("design/connect_database.php");
	if($_SESSION['s_name'] ==''){
		header('Location: http://piano-gd.ru/');
	}
	$first_flag = 0;
	$count_query = mysql_query("SELECT * FROM period");
	$count = mysql_num_rows($count_query);

	if(isset($_POST['editor_price-submit'])){
		$id = $_POST['id_number_room'];
		$name_element = $id."_editor_name-select";
		$place_count_element = $id."_editor_place_count-input";
		$space_number_element = $id."_editor_space_number-input";
		$extra_space_element = $id."_editor_extra_space-input";
		$price_description_element = $id."_editor_price_description";
		$price_add_info_element = $id."_editor_price_add_info";

		mysql_query("UPDATE rooms SET name='".$_POST[$name_element]."',place_count=".$_POST[$place_count_element].",space_number=".$_POST[$space_number_element].",extra_space=".$_POST[$extra_space_element].",description_main='".$_POST[$price_description_element]."',description_more='".$_POST[$price_add_info_element]."' WHERE id=".$id);

		for ($i=1;$i<=$count;$i++){
			$element[$i] = $id."_editor_price-input_".$i;
			$element2[$i] = $id."_editor_price-input2_".$i;
			$name_up = $_POST["editor_price-input_name_up_".$id];
			$name_down = $_POST["editor_price-input_name_down_".$id];

			$price[$i] = $_POST[$element[$i]];
			$price2[$i] = $_POST[$element2[$i]];

			// Обновляем информацию о ценах по периодам по выбранной квартире
			mysql_query("UPDATE prices SET price=".$price[$i]." WHERE room=".$id." AND period=".$i);
			mysql_query("UPDATE prices SET price2=".$price2[$i]." WHERE room=".$id." AND period=".$i);
		}
	}

?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta name='wmail-verification' content='238100b8ef9e8eda009c6147f8826049' />
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		<? $title="Редактор цен"; ?>
		<? include_once("design/head.php"); ?>
	</head>

	<body>
	<?
		// Подключаем абсолютные элементы
		include_once("design/absolute.php");
		$query = mysql_query("SELECT * FROM rooms");
		$number = mysql_num_rows($query);

		$query_room_type_all = mysql_query("SELECT * FROM rooms_type");
		$query_footnote = mysql_query("SELECT * FROM room_footnote WHERE id_room_footnote=1");
		$row_footnote = mysql_fetch_assoc($query_footnote);
	?>

	<div class="content">
	<?
		include_once("design/logo_editor.php");
		$class_editor_price="active_page";
		include_once("design/nav_editor.php");
	?>
		<section>

<!-- Блок редактора цен на комнаты по периодам -->
			<div class="editor_form">
      <form class="editor_form_2" action="" method="post" name="editor_form_2">
				<button name="editor_price-submit" class="editor_price-submit" type="submit">Сохранить данные по ценам</button>
				<h1 class="center">Редактор цен</h1>
        <input type="hidden" id="id_number_room" name="id_number_room" value="1">

			<?
				while($row = mysql_fetch_assoc($query)){
					$query_room_type_1 = mysql_query("SELECT * FROM rooms_type WHERE id_room_type='".$row['name']."'");
					$row_room_type_1 = mysql_fetch_assoc($query_room_type_1);
			?>
				<div class="editor_room <?=($first_flag==0?'editor_room-active':'no')?>" id="<?=$row['id']?>">
					<div class="editor_room-place_count"><?=$row['place_count']?></div>
					<div class="editor_room-name"><?=$row_room_type_1['name_room_type']?></div>
					<div class="editor_room-size"><?=$row['space_number']?> кв.м.</div>
				</div>
			<?
				$first_flag++;
				}
				mysql_data_seek($query, 0);
			?>

			<div class="clear"></div>
			<?
				while($row = mysql_fetch_assoc($query)){
					$query_price = mysql_query("SELECT * FROM prices WHERE room='".$row[id]."'");
			?>

			<div class="editor_price" id="editor_id_<?=$row['id']?>">

        <table class="price-table center-block w100per">
          <tr>
            <td colspan="4" class="bold center"> Стоимость номера в сутки на 2018 год </td>
          </tr>
          <?
          $i = 1;
            while($row_price = mysql_fetch_assoc($query_price)){
              $query_period = mysql_query("SELECT * FROM period WHERE id='".$row_price['period']."'");
              $row_period = mysql_fetch_assoc($query_period);

          ?>
            <tr>
              <td> <?=$row_period['period_name']?> </td>
              <td> <?=$row_period['fraction_up']?> <?=($row_period['fraction']==1)?(' / '.$row_period['fraction_down']):''?> </td>
              <td> <input name="<?=$row['id']?>_editor_price-input_<?=$row_period['id']?>" class="editor_price-input" value="<?=$row_price['price']?>"> рублей</td>
              <td> <input name="<?=$row['id']?>_editor_price-input2_<?=$row_period['id']?>" class="editor_price-input" value="<?=$row_price['price2']?>"> рублей </td>
            </tr>
          <?
            $i++;
            }
          ?>
        </table>

        <div class="clear"></div>

        <div>
          <h3 class="center">Основное наименование номеров</h3>
          <textarea name="<?=$row['id']?>_editor_price_description" id="editor_price_description_<?=$row['id']?>"><?=$row['description_main']?></textarea>
        </div>
        <div>
          <h3 class="center">Дополнительное наименование номеров</h3>
          <textarea name="<?=$row['id']?>_editor_price_add_info" id="editor_price_add_info_<?=$row['id']?>"><?=$row['description_more']?></textarea>
        </div>

        <div class="clear"></div>

        <div class="editor_name">
          <div class="editor_name-name">
            Категория номеров:
          </div>
          <select name="<?=$row['id']?>_editor_name-select" class="editor_name-select">
          <?
            while($row_room_type_select=mysql_fetch_assoc($query_room_type_all)){
          ?>
            <option <?=($row_room_type_select['id_room_type']==$row['name']?'selected=selected':'');?> value="<?=$row_room_type_select['id_room_type'];?>"> <?=$row_room_type_select['name_room_type'];?> </option>
          <?
            }
            mysql_data_seek($query_room_type_all,0);
          ?>
          </select>
        </div>

        <div class="clear"></div>

        <div class="editor_place_count">
					<div class="editor_place_count-name">Сколько мест в номере?</div>
					<input class="editor_place_count-input" type="text" name="<?=$row['id']?>_editor_place_count-input" value="<?=$row['place_count']?>">
				</div>

				<div class="clear"></div>

				<div class="editor_space_number">
					<div class="editor_space_number-name">Укажите площадь комнаты:</div>
					<input class="editor_space_number-input" type="text" name="<?=$row['id']?>_editor_space_number-input" value="<?=$row['space_number']?>"> квадратных метров
				</div>

				<div class="clear"></div>

				<div class="editor_extra_space">
					<div class="editor_extra_space-name">Укажите максимальное количество дополнительных мест:</div>
					<input class="editor_extra_space-input" type="text" name="<?=$row['id']?>_editor_extra_space-input" value="<?=$row['extra_space']?>">
				</div>
			</div>
			<?
				}
			?>
			</form>
		</div>
		</section>
	</div>
	</body>
	<script type="text/javascript">
		CKEDITOR.replace('editor_price_description_1');
		CKEDITOR.replace('editor_price_description_2');
		CKEDITOR.replace('editor_price_description_3');
		CKEDITOR.replace('editor_price_add_info_1');
		CKEDITOR.replace('editor_price_add_info_2');
		CKEDITOR.replace('editor_price_add_info_3');
	</script>
</html>
