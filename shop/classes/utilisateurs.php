<?php
class Utilisateur
{
	private $db;
	public $id_user;
	public $prenom;
	public $nom;
	public $mail;
	public $mdp;
	public $inscription;

	public function __construct()
	{
		$connection = new Database();
		$this->db = $connection->connection();
	}

	public function sessionUser()
	{
		session_start();
		
		$sth = $this->db->query('SELECT * FROM utilisateur WHERE id_user=' . $_SESSION['id']);
		$sth->execute();
		$results = $sth->fetchAll(PDO::FETCH_OBJ);
		
		$donnees = [];
		foreach($results as $result){
			$utilisateur = new Utilisateur();
			$utilisateur->id_user = $result->id_user;
			$utilisateur->prenom = $result->prenom;
			$utilisateur->nom = $result->nom;
			$utilisateur->mail = $result->mail;
			$utilisateur->mdp = $result->mdp;
			$utilisateur->inscription = $result->inscription;
			$utilisateur->pseudo = $result->pseudo;

			$donnees[] = $utilisateur;
		}
		return $donnees;
	}
}
?>