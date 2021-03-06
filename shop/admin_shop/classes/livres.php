<?php
class Livre
{
	private $db;
	public $id_livre;
	public $titre;
	public $auteur;
	public $parution;
	public $couverture;
	public $prix;
	public $stock;
	public $langue;
	public $edition;
	public $genre;

	public function __construct()
	{
		$connection = new Database();
		$this->db = $connection->connection();
	}

	public function findAll()
	{
		$sth = $this->db->query('SELECT * FROM livre');
		$sth->execute();
		$results = $sth->fetchAll(PDO::FETCH_OBJ);
		
		$livres = [];
		foreach($results as $result){
			$livre = new Livre();
			$livre->id_livre = $result->id_livre;
			$livre->titre = $result->titre;
			$livre->auteur = $result->auteur;
			$livre->parution = $result->parution;
			$livre->couverture = $result->couverture;
			$livre->prix = $result->prix;
			$livre->stock = $result->stock;
			$livre->langue = $result->langue;
			$livre->edition = $result->edition;
			$livre->genre = $result->genre;

			$livres[] = $livre;
		}
		return $livres;
	}
}
?>