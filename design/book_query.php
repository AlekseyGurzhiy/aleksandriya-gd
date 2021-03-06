<?
	if (isset($_POST['send_book'])){
		mail("piano.gd@yandex.ru","Заявка на бронирование номера PIANO ","Здравствуйте, Оля и Серёжа! \nЯ, ".$_POST['book_fio']." из ".$_POST['book_whence']."\nхотел(а) бы забронировать номер с ".$_POST['book_startdate']." по ".$_POST['book_enddate']." \nМой номер телефона: ".$_POST['book_phone']."\nАдрес моей электронной почты: ".$_POST['book_email']."\nДополнительная информация:\n".$_POST['book_message']."\n\nЖду ответа...");
	}
?>