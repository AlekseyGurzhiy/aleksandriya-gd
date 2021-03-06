<nav>
	<ul>
	<? if($_SESSION['s_rang'] == 'admin') { ?>
		<li class="<?=$class_editor_price;?>"><a href="/editor_pr/">Редактор цен</a></li>
		<li class="<?=$class_editor_period;?>"><a href="/editor_period/">Редактор периодов проживания</a></li>
		<li class="<?=$class_index;?>"><a href="/">Выход</a></li>
	<? } ?>
	</ul>
</nav>
