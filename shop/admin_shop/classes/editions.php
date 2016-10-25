<?php
class Edition
{
	private $db;
	public $id_edition;
	public $edition;

	public function __construct()
	{
		$connection = new Database();
		$this->db = $connection->connection();
	}

	public function findAll()
	{
		$sth = $this->db->query('SELECT * FROM edition ORDER BY edition ASC');
		$sth->execute();
		$results = $sth->fetchAll(PDO::FETCH_OBJ);
		
		$editions = [];
		foreach($results as $result){
			$edition = new Edition();
			$edition->id_edition = $result->id_edition;
			$edition->edition = $result->edition;

			$editions[] = $edition;
		}
		return $editions;
	}
}
?>