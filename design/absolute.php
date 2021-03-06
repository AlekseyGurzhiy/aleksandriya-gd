<div class="darken"></div>
<div class="add_reviews-area">
	<form class="reviews_form" action="" method="post" name="reviews_form">
		<ul>
			<li>
				 <h2>Контактная информация:</h2>
				 <span class="required_notification">Все поля обязательные для заполнения</span>
			</li>
			<li>
				<label for="reviews_fio">Фамилия, имя, отчество:</label>
				<input type="text" name="reviews_fio" class="reviews_fio" placeholder="Например: Иванов Иван Иванович" required>
			</li>
			<li>
				<label for="reviews_whence">Место проживания:</label>
				<input type="text" name="reviews_whence" class="reviews_whence" placeholder="Например: г. Москва" required>
			</li>
			<li>
				<label for="reviews_email">Электронная почта:</label>
				<input type="text" name="reviews_email" class="reviews_email" placeholder="Например: ivanov@yandex.ru" required>
			</li>
			<li>
				<label for="reviews_startdate">Период отдыха:</label> 
				<input type="text" name="reviews_startdate" id="datepicker_start" placeholder="Начало отдыха" required> - 
				<input type="text" name="reviews_enddate" id="datepicker_end" placeholder="Окончание отдыха" required>
			</li>
			<li>
				<label for="message">Сообщение:</label> <br> <br>
				<textarea name="message" required></textarea>
			</li>
			<li>
				<button class="submit" type="submit" name="send_reviews">Оставить отзыв</button>
			</li>
		</ul>
	</form>
</div>
<div class="book">
	<form class="book_form" action="" method="post" name="book_form">
		<ul>
			<li>
				 <h2>Забронировать номер:</h2>
				 <span class="required_notification">Вы отправляете заявку на бронирование. Дождитесь звонка или письма на электронный адрес <br /> Отправка заявки не является бронью</span>
			</li>
			<li>
				<label for="book_fio">Фамилия, имя, отчество:</label>
				<input type="text" name="book_fio" class="book_fio" placeholder="Например: Петров Пётр Петрович" required>
			</li>
			<li>
				<label for="book_whence">Место проживания:</label>
				<input type="text" name="book_whence" class="book_whence" placeholder="Например: г. Санкт-Петербург" required>
			</li>
			<li>
				<label for="book_email">Электронная почта:</label>
				<input type="text" name="book_email" class="book_email" placeholder="Например: petrov@mail.ru" required>
			</li>
			<li>
				<label for="book_startdate">Хочу отдохнуть с:</label> 
				<input type="text" name="book_startdate" id="book_start" placeholder="Начало отдыха" required> по 
				<input type="text" name="book_enddate" id="book_end" placeholder="Окончание отдыха" required>
			</li>
			<li>
				<label for="book_phone">Телефон:</label>
				<input type="tel" name="book_phone" class="book_phone" placeholder="Например: +79511410290" required>
			</li>
			<li>
				<h3> <a rel="piano_rools" data-fancybox-type="iframe" href="img/rools_piano.pdf" title="Правила проживания в гостевом доме Piano">Внимание! Перед бронированием ознакомьтесь с правилами проживания (нажмите для просмотра)</a></h3>
			</li>
			<li>
				<label for="book_message">Сообщение:</label> <br> <br>
				<textarea name="book_message" required></textarea>
			</li>
			<li>
				<button class="book_submit" type="submit" name="send_book">Забронировать!</button>
			</li>
		</ul>
	</form>

	<!--<div class="left" id="_bn_widget_">
		<a href="http://bnovo.ru/" id="_bnovo_link_" target="_blank">Bnovo</a>
	</div>

	<script src="http://widget.bnovo.ru/v2/js/bnovo.js"></script>

	<script type="text/javascript">
	/*Bnovo_Widget.init(function(){
		Bnovo_Widget.open('_bn_widget_', {
			type: "vertical",
			lcode: "1499757684",
			lang: "ru",
			width: "264",
			background: "#16aca4",
			bg_alpha: "100",
			padding: "18",
			border_radius: "4",
			font_type: "arial",
			font_color: "#222222",
			font_size: "16",
			title_color: "#ffffff",
			title_size: "18",
			inp_color: "#222222",
			inp_bordhover: "#3796e5",
			inp_bordcolor: "#cccccc",
			inp_alpha: "100",
			btn_background: "#02786e",
			btn_background_over: "#038f81",
			btn_textcolor: "#FFFFFF",
			btn_textover: "#FFFFFF",
			btn_bordcolor: "#02786e",
			btn_bordhover: "#038f81",
			text_concierge: "Получи скидку через Bnovo Concierge",
			url: "http://piano-gd.ru"
		});
	});*/
	</script>-->

</div>