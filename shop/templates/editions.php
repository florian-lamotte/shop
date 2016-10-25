<?php
	session_start();
	
	require_once("../boot.php");

	$edition = new Edition();
	$editions = $edition->findAll();
?>

<div class="jumbotron">
	<ul>
		<?php
			foreach ($editions as $e) {
				echo '<li class="dropdown">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">' . $e->edition . '
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="#">HTML</a></li>
		      			<li><a href="#">CSS</a></li>
		      			<li><a href="#">JavaScript</a></li>
		    		</ul>
    			</li><br/>
				';
			}
		?>
	</ul>
</div>