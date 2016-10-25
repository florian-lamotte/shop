<?php
class Auteur
{
	private $db;
	public $id_auteur;
	public $auteur;
	public $titre;

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

	public function livresByAuteur($auteur)
	{
		$reponse = $this->db->query('SELECT titre FROM livre WHERE auteur = "'. $auteur .'"');
		$reponse->execute();
		$donnees = $reponse->fetchAll(PDO::FETCH_OBJ);
		
		$livresByAuteur = [];
		foreach ($donnees as $d){
			$livres = new Auteur();
			$livres->titre = $d->titre;

			$livresByAuteur[] = $livres;
		}
		return $livresByAuteur;
	}
}
?>