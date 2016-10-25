<?php
class Panier
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
	public $id_user;
	public $quantite;
	public $total;

	public function __construct()
	{
		$connection = new Database();
		$this->db = $connection->connection();
	}

	public function findAll()
	{
		session_start();

		$sth = $this->db->query('
			SELECT *
			FROM livre l, utilisateur u, panier p 
			WHERE u.id_user = p.id_user
			AND l.id_livre = p.id_livre
			AND u.id_user = ' . $_SESSION['id']
		);
		$sth->execute();
		$results = $sth->fetchAll(PDO::FETCH_OBJ);
		
		$livres = [];
		foreach($results as $result){
			$livre = new Panier();
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
			$livre->quantite = $result->quantite;
			$livre->total = $result->total;

			$livres[] = $livre;
		}
		return $livres;
	}
}
?>