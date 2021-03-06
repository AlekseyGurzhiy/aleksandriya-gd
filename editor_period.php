<?
	include_once("design/connect_database.php");
	if($_SESSION['s_name'] ==''){
		header('Location: http://piano-gd.ru/');
	}

  if(isset($_POST['editor_period-submit'])){
    $query = mysql_query("SELECT * FROM period");
    $number = mysql_num_rows($query);
    $i=1;

    for($i=1;$i<=$number;$i++){
      $name_per="editor_period_name_".$i;
      $name_drob="editor_period_check_".$i;
      $name_up="editor_period_up_".$i;
      $name_down="editor_period_down_".$i;
      if ($_POST[$name_drob]=="on"){
        $drob = "1";
      } else {
        $drob = "0";
      }
      mysql_query("UPDATE period SET period_name='".$_POST[$name_per]."',fraction='".$drob."',fraction_up='".$_POST[$name_up]."',fraction_down='".$_POST[$name_down]."' WHERE id=".$i);
    }
  }

	if(isset($_POST['editor_footnote-submit'])){
		mysql_query("UPDATE room_footnote SET footnote='".$_POST['footnote_more']."',more_info='".$_POST['info_more']."' WHERE id_room_footnote=1");
	}
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		<? $title="Редактор периодов проживания"; ?>
		<? include_once("design/head.php"); ?>
	</head>

	<body>
	<?
		// Подключаем абсолютные элементы
		include_once("design/absolute.php");
		$query = mysql_query("SELECT * FROM rooms");
		$number = mysql_num_rows($query);

	?>

	<div class="content">
	<?
		include_once("design/logo_editor.php");
		$class_editor_period="active_page";
		include_once("design/nav_editor.php");

		$query_room_type_all = mysql_query("SELECT * FROM rooms_type");
		$query_footnote = mysql_query("SELECT * FROM room_footnote WHERE id_room_footnote=1");
		$row_footnote = mysql_fetch_assoc($query_footnote);
	?>
		<section>
<!-- Блок редактора периодов -->
			<div class="editor_form">
				<form class="editor_form_periods" action="" method="post" name="editor_form_periods">
				<h1> Редактор периодов проживания </h1>
				<table class="price-table center-block mt10 w100per">
					<tr>
						<td colspan="4" class="bold center"> Редактируем информацию о периодах проживания </td>
					</tr>
	<?
					$i = 1;
					$query_period_edit = mysql_query("SELECT * FROM period");
					while($row_edit = mysql_fetch_assoc($query_period_edit)) {
	?>
					<tr>
						<td><input type="text" name="editor_period_name_<?=$row_edit['id']?>" value="<?=$row_edit['period_name']?>"></td>
	          <td> Дробь <input class="check_del" id="c<?=$row_edit['id']?>" name="editor_period_check_<?=$row_edit['id']?>" type="checkbox" <?= ($row_edit['fraction']==1)?'checked':''?>> </td>
						<td><input type="text" name="editor_period_up_<?=$row_edit['id']?>" value="<?=$row_edit['fraction_up']?>"></td>
	          <td><input id="d<?=$row_edit['id']?>" name="editor_period_down_<?=$row_edit['id']?>" class="<?=($row_edit['fraction']==0)?'input_disabled':''?>" type="text" <?= ($row_edit['fraction']==0)?'disabled':''?> value="<?=$row_edit['fraction_down']?>"></td>
					</tr>
	<?
					}
	?>
				</table>
				<button name="editor_period-submit" class="editor_price-submit" type="submit">Сохранить данные по периодам проживания</button>
				</form>
			</div>

			<div class="clear"></div>
			<div class="editor_form">
					<form action="" method="post" name="editor_form">
							<h1>Редактирование пункта ПРИМЕЧАНИЕ</h1>
							<div>
								<textarea name="footnote_more" id="footnote_more"><?=$row_footnote['footnote']?></textarea>
							</div>
							<h1>Редактирование пункта ДОПОЛНИТЕЛЬНАЯ ИНФОРМАЦИЯ</h1>
							<div>
								<textarea name="info_more" id="info_more"><?=$row_footnote['more_info']?></textarea>
							</div>
							<button name="editor_footnote-submit" class="editor_price-submit" type="submit">Сохранить данные по дополнительной информации и примечанию</button>
					</form>
				</div>
		</section>
	</div>
	</body>
	<script type="text/javascript">
		CKEDITOR.replace('footnote_more');
		CKEDITOR.replace('info_more');
		CKEDITOR.replace('book_message');
	</script>
</html>
