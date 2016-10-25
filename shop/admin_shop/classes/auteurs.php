<?php
class Auteur
{
	private $db;
	public $id_auteur;
	public $auteur;

	public function __construct()
	{
		$connection = new Database();
		$this->db = $connection->connection();
	}

	public function findAll()
	{
		$sth = $this->db->query('SELECT * FROM auteur ORDER BY auteur ASC');
		$sth->execute();
		$results = $sth->fetchAll(PDO::FETCH_OBJ);
		
		$auteurs = [];
		foreach($results as $result){
			$auteur = new Auteur();
			$auteur->id_auteur = $result->id_auteur;
			$auteur->auteur = $result->auteur;

			$auteurs[] = $auteur;
		}
		return $auteurs;
	}
}
?>