<?php
class Database
{
	public function connection()
	{
		$db = new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 'root', '');
		return $db;
	}
}
?>