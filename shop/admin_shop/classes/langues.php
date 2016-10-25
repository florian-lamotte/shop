<?php
class Langue
{
	private $db;
	public $id_langue;
	public $langue;

	public function __construct()
	{
		$connection = new Database();
		$this->db = $connection->connection();
	}

	public function findAll()
	{
		$sth = $this->db->query('SELECT * FROM langue ORDER BY langue ASC');
		$sth->execute();
		$results = $sth->fetchAll(PDO::FETCH_OBJ);
		
		$langues = [];
		foreach($results as $result){
			$langue = new Langue();
			$langue->id_langue = $result->id_langue;
			$langue->langue = $result->langue;

			$langues[] = $langue;
		}
		return $langues;
	}
}
?>