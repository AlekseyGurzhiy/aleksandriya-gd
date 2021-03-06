	document.createElement("header");
	document.createElement("article");
	document.createElement("aside");
	document.createElement("figcaption");
	document.createElement("figure");
	document.createElement("footer");
	document.createElement("nav");
	document.createElement("section");

$(document).ready(function() {

	$.datepicker.setDefaults(
		$.extend($.datepicker.regional["ru"])
	);

	$( "#book_start" ).datepicker({
		minDate: "0"
	});

	$( "#book_end" ).datepicker({
		minDate: "0"
	});

	$( "#datepicker_start,#datepicker_end" ).datepicker();

	$(".my_select").change(function(){
		number = $(this).val();
		classname = "#info_"+number;
		$(".info_all").hide();
		$(classname).show();
	});

	$(".button_book").click(function(){
		$(".darken").show();
		$(".book").show(200);
	});

	$(".add_reviews-button").click(function(){
		$(".darken").show();
		$(".add_reviews-area").show(200);
	});

	$(".darken").click(function(){
		$(".darken").hide();
		$(".add_reviews-area").hide(200);
		$(".book").hide(200);
	});

	$(".editor_room").click(function(){
		id = $(this).attr("id");
		$("#id_number_room").val(id);
		//Отрисовываем кнопки выбора комнат
		$(".editor_room").removeClass("editor_room-active");
		$(this).addClass("editor_room-active");
		classname = "#editor_id_"+id;
		$(".editor_price").fadeOut(200);
		$(classname).fadeIn(300);
	});

	$(".check_del").click(function(){
		str_id = $(this).attr('id');
		ch_id = str_id.substr(1);
		new_id = "#d"+ch_id;
		if ($(this).attr('checked')) {
			$(new_id).removeAttr("disabled");
			$(new_id).removeClass('input_disabled');
		} else {
			$(new_id).attr('disabled', true);
			$(new_id).addClass('input_disabled');
			$(new_id).val('');
		};
	});

});
