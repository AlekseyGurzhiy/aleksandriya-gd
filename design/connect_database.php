<?header('Content-type: text/html; charset=utf-8');
	//Подключаемся к базе данных
	$connect = mysql_connect("localhost","_____","_____");
	if (!$connect) die("Не могу подсоединиться к базе данных!");
	$select_database = mysql_select_db("_____");
	mysql_query("SET NAMES 'UTF8'");
	session_start();
?>
