<?
class Reviews{
	private $fio;
	private $whence;
	private $email;
	private $date_start;
	private $date_end;
	private $main_text;

	private function LoadDate($fio,$whence,$email,$date_start,$date_end,$main_text){
		// Определяем значения переменных
		$this->fio = $fio;
		$this->whence = $whence;
		$this->email = $email;
		$this->date_start = $date_start;
		$this->date_end = $date_end;
		$this->main_text = $main_text;

		mysql_query("INSERT INTO `reviews` (`fio`,`whence`,`email`,`date_start`,`date_end`,`main_text`) VALUES ('".$this->fio."','".$this->whence."','".$this->email."','".$this->date_start."','".$this->date_end."','".$this->main_text."')");
	}

	public function getDate(){
		return mysql_query("SELECT * FROM reviews ORDER BY `id` desc LIMIT 10");
	}
}
?>