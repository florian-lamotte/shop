<?php
	session_start();

    require_once("boot.php");

    $genre = new Genre();
    $genres = $genre->findAll();
?>

<!DOCTYPE html>
<html ng-app="shop">
<head>
	<meta charset="utf-8">
	<title>Shop</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>

<body ng-controller="mainController">

	<nav id="sidebar">
	    <ul class="nav nav-pills nav-stacked" >
	        <?php foreach ($genres as $g) {
	          echo '<li><a href="#/' . $g->genre . '" class="list-group-item">' . $g->genre . '</a></li>';
	        } ?>
	    </ul>
	</nav>

	<div class="navbar-wrapper">
	    <div class="container">
	        <nav class="navbar navbar-inverse navbar-static-top">		        
			    <div class="navbar-header">
			        <a class="navbar-brand" href="#/">Shop</a>
			    </div>
			    <div id="navbar" class="navbar-collapse collapse">
			        <ul class="nav navbar-nav">
			            <li><a href="#/">Accueil</a></li>
			            <li><a href="#/auteurs">Auteurs</a></li>
			            <?php 
			            	if (isset($_SESSION['pseudo'])) { 
			                	echo '<li><a href="#/profil">Profil</a></li>
			                	<li><a href="#/panier">Panier</a></li>'; 
			                } 
			            ?>
			        </ul>
			        <?php if (!isset($_SESSION['pseudo'])) { ?>
	                <form method="post" action="connexion.php" class="navbar-form navbar-right">
		            	<div class="form-group">
		              		<input type="text" name="username" placeholder="Pseudo" class="form-control">
		            	</div>
		            	<div class="form-group">
		              		<input type="password" name="password" placeholder="Password" class="form-control">
		            	</div>
		            	<button type="submit" class="btn btn-success">Connexion</button>
	          		</form>
	          		<?php } else { 
	          			echo '<a href="deconnexion.php" class="navbar-form navbar-right">
	          			<button type="submit" class="btn btn-primary">Déconnexion</button>
	          			</a>'; 
	          		} ?>
	            </div>
	        </nav>
	    </div>
	</div>

	<div class="container">
	    <div ng-view></div>

	   	<footer>
	    	<p>&copy; 2016 Shop</p>
	    </footer>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/angular.min.js"></script>
	<script src="js/angular-route.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>