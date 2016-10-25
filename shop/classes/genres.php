<?php
class Genre
{
	private $db;
	public $id_genre;
	public $genre;

	public function __construct()
	{
		$connection = new Database();
		$this->db = $connection->connection();
	}

	public function findAll()
	{
		$sth = $this->db->query('SELECT * FROM genre ORDER BY genre ASC');
		$sth->execute();
		$results = $sth->fetchAll(PDO::FETCH_OBJ);
		
		$genres = [];
		foreach($results as $result){
			$genre = new Genre();
			$genre->id_genre = $result->id_genre;
			$genre->genre = $result->genre;

			$genres[] = $genre;
		}
		return $genres;
	}
}
?>