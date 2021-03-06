<nav>
	<ul>
		<li class="<?=$class_index;?>"><a href="/">О нас</a></li>
		<li class="<?=$class_photo;?>"><a href="/photo/">Фотографии</a></li>
		<li class="<?=$class_price;?>"><a href="/price/">Цены на 2021 год</a></li>
		<li class="<?=$class_reviews;?>"><a href="/reviews/">Отзывы</a></li>
		<li class="<?=$class_contacts;?>"><a href="/contacts/">Контакты</a></li>
		<li class="<?=$class_doc;?>"><a href="/documents/">Документы</a></li>
	<? if($_SESSION['s_rang'] == 'admin') { ?>
		<li class="<?=$class_editor;?>"><a href="/editor_pr/">Редактор</a></li>
	<? } ?>
	</ul>
</nav>
