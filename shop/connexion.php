<?php
	if (!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])) {
		$db = new PDO('mysql:host=localhost;dbname=shop', 'root', '');
		/*require_once ("classes/database.php");
		$connexion = new Database();
    	$db = $connexion->connection();*/
		$req = $db->prepare('SELECT * FROM utilisateur WHERE pseudo=:username and mdp=:password');
		$req->bindValue(':username', $_POST['username']);
		$req->bindValue(':password', $_POST['password']);
		$req->execute();
		$data = $req->fetch(PDO::FETCH_ASSOC);

		if($data) {
			session_start();
			//$_SESSION['user'] = $data;
			echo 'connecté';
			$_SESSION['pseudo'] = $data['pseudo'];
	   		$_SESSION['mdp'] = $data['mdp'];
	    	$_SESSION['id'] = $data['id_user'];
	    	echo $_SESSION['pseudo'];
	    	echo $_SESSION['mdp'];
	    	echo $_SESSION['id'];
			//header('Location: /shop');
        	//exit();
		}
		else {
			echo 'pas connecté';
		}
		header('Location: /shop');
       	exit();
	} else {
		header('Location: /shop');
       	exit();
	}
 ?>