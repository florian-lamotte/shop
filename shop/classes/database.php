<?php
class Database
{
	public function connection()
	{
		$db = new PDO('mysql:host=localhost;dbname=shop', 'root', '');
		return $db;
	}
}
?>