<?php
	session_start();

    $db = new PDO('mysql:host=localhost;dbname=shop', 'root', '');

    $resultat = $db->query('SELECT quantite FROM panier WHERE id_livre = ' . $_GET['id_livre']);
	$quantite = $resultat->fetch();

	$res = $db->query('SELECT prix FROM livre WHERE id_livre = ' . $_GET['id_livre']);
	$total = $res->fetch();

	if ($quantite['quantite'] < 1){
		$req = $db->prepare('INSERT INTO panier(id_livre, id_user, quantite, total) VALUES(:id_livre, :id_user, 1, ' . $total['prix'] . ')');
		$req->execute(array(
			'id_livre' => $_GET['id_livre'],
			'id_user' => $_SESSION['id']
		));
	} else {
		$i = $quantite['quantite']+1;
		$t = $total['prix']*$i;

		$req = $db->prepare('UPDATE panier SET quantite = ' . $i . ', total = ' . $t . ' WHERE id_livre = ' . $_GET['id_livre']);
		$req->execute(array(
			'id_livre' => $_GET['id_livre'],
			'id_user' => $_SESSION['id']
		));
	}

	header('Location: /shop');
    exit();
?>

